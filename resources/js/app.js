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
