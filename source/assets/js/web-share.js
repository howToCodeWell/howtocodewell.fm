(function () {
    'use strict';

    function shareCheck() {
        let text = getMeta('description');
        if(text === '') {
            text = 'Check out the How To Code Well podcast';
        }
        if (navigator.share !== undefined) {

            document.addEventListener('DOMContentLoaded', function () {

                let container = document.getElementById('share-container');
                let btn = document.createElement('input');
                btn.type = 'button';
                btn.value = 'Share on phone';
                btn.classList.add('btn');

                // add share button event listener
                btn.addEventListener('click', function (event) {
                    // web share API
                    navigator.share({
                        title: document.title,
                        text: text + ' #howToCodeWell',
                        url: getURL()
                    })
                    .then(function () {
                        console.info('Shared!');
                    })
                    .catch(function (error) {
                        console.error('Error: ', error);
                    })
                });
                container.appendChild(btn);
            });
        }
    }

    window.onload = shareCheck;
})();