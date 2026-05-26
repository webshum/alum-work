import { createApp } from 'vue/dist/vue.esm-bundler';
import { register } from 'swiper/element/bundle';
import Home from './components/Home.vue';

register();

// createApp(Home).mount('#app');


/*  ACORDEON
------------------------------------------------- */
function acordeon(setting) {
    let acordeon = document.querySelectorAll(setting.clasName);

        for (let i = 0; i < acordeon.length; i++) {
        let btn = acordeon[i].querySelectorAll('.acordeon-btn');
        let content = acordeon[i].querySelectorAll('.acordeon-content');

        for(let i = 0; i < btn.length; i++) {
            btn[i].onclick = function() {
                if (btn[i].classList.contains('active')) {
                    btn[i].classList.remove('active');
                    content[i].style.height = 0 + 'px';
                    return;
                }
                if (setting.showOne) {
                    for (let z = 0; z < content.length; z++) {
                        content[z].style.height = 0 + 'px';
                        btn[z].classList.remove('active');
                    }
                }

                btn[i].classList.add('active');
                let height = content[i].scrollHeight;
                content[i].style.height = height + 'px';
            }
        };
    }
}

if (document.querySelector('.acordeon') != null) {
    let acordeon1 = new acordeon({
        clasName: '.acordeon',
        showOne: true,
    });
}

// Swiper для сторінки товару
const mainSwiperEl = document.querySelector('.main-img');
const thumbSwiperEl = document.querySelector('.thumbs');

if (mainSwiperEl && thumbSwiperEl) {
    const swiperParams = {
        thumbs: {
            swiper: thumbSwiperEl,
        },
    };

    Object.assign(mainSwiperEl, swiperParams);

    mainSwiperEl.initialize();
    thumbSwiperEl.initialize();
}


document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');
  const menuToggle = document.querySelector('.menu-toggle');
  const body = document.body;
  
  // Відкриття/закриття головного меню
  menuToggle.addEventListener('click', () => {
    const isOpen = header.classList.toggle('menu-open');
    menuToggle.setAttribute('aria-expanded', isOpen);
    body.classList.toggle('no-scroll', isOpen);
  });

  // Акордеон для підменю на мобілці
  const dropdownItems = document.querySelectorAll('.has-dropdown > .nav-link');
  dropdownItems.forEach(link => {
    link.addEventListener('click', (e) => {
      if (window.innerWidth <= 1024) {
        e.preventDefault();
        const parent = link.parentElement;
        parent.classList.toggle('active');
      }
    });
  });

  // Закриття по кліку на пункт меню
  const navLinks = document.querySelectorAll('.header-nav a:not(.has-dropdown > .nav-link)');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth <= 1024) {
        header.classList.remove('menu-open');
        body.classList.remove('no-scroll');
        menuToggle.setAttribute('aria-expanded', false);
      }
    });
  });
});