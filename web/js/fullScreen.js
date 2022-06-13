/*INICIO DEIXAR TELA CHEIA*/
        function toggleFullScreen() {
            if ((document.fullScreenElement && document.fullScreenElement !== null) ||
                    (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                if (document.documentElement.requestFullScreen) {
                    document.documentElement.requestFullScreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullScreen) {
                    document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            }
            //SE A TELA JÁ ESTIVER NO MODO TELA CHEIA ENTÃO DESFAZ
            /*
             else {
             if (document.cancelFullScreen) {
             document.cancelFullScreen();
             } else if (document.mozCancelFullScreen) {
             document.mozCancelFullScreen();
             } else if (document.webkitCancelFullScreen) {
             document.webkitCancelFullScreen();
             }
             }  
             */

        }

        /*FIM DEIXAR TELA CHEIA*/