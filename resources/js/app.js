import { createApp } from 'vue/dist/vue.esm-bundler';
import { register } from 'swiper/element/bundle';
import Home from './components/Home.vue';

register();

/*  HEADER
------------------------------------------------- */
document.querySelector('.menu-toggle').addEventListener('click', e => {
    e.preventDefault();
    console.log('click');
    document.body.classList.toggle('show-menu');
});

/*  ACORDEON
------------------------------------------------- */
function acordeon(setting) {
    let acordeon = document.querySelectorAll(setting.clasName);

    for (let i = 0; i < acordeon.length; i++) {
        let btn = acordeon[i].querySelectorAll('.acordeon-btn');
        let content = acordeon[i].querySelectorAll('.acordeon-content');

        for (let j = 0; j < btn.length; j++) {
            btn[j].onclick = function() {
                if (btn[j].classList.contains('active')) {
                    btn[j].classList.remove('active');
                    content[j].style.height = 0 + 'px';
                    return;
                }
                if (setting.showOne) {
                    for (let z = 0; z < content.length; z++) {
                        content[z].style.height = 0 + 'px';
                        btn[z].classList.remove('active');
                    }
                }
                btn[j].classList.add('active');
                content[j].style.height = content[j].scrollHeight + 'px';
            };
        }
    }

    if (setting.showMoreBtn) {
        const showMoreBtn = document.querySelector(setting.showMoreBtn);
        if (showMoreBtn) {
            showMoreBtn.addEventListener('click', function() {
                document.querySelectorAll('.acordeon-wrap.hidden').forEach(el => {
                    el.classList.remove('hidden');
                });
                showMoreBtn.style.display = 'none';
            });
        }
    }
}

if (document.querySelector('.acordeon') != null) {
    acordeon({
        clasName: '.acordeon',
        showOne: true,
        showMoreBtn: '.faq .button',
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
