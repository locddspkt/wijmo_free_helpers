<script>
    (function () {
        var DELAY = 50;
        function tryRemovePanel() {
            var $$links = window.document.querySelectorAll('a[href="https://www.grapecity.co.jp/developer/support/wijmo-license"]');
            if ($$links.length > 0) {
                var $link = $$links[$$links.length - 1];
                var $parent = $link.parentElement;
                $parent.outerHTML = '';
            } else {
                //set timeout 1 second
                console.log('try next');
                setTimeout(tryRemovePanel, DELAY);
            }
        }
        function tryRemovePopup() {
            var $$links = window.document.querySelectorAll('a[href="mailto:sales@grapecity.com"]');
            if ($$links.length > 0) {
                var $link = $$links[$$links.length - 1];
                var $parent = $link.parentElement.parentElement.parentElement.parentElement;
                $parent.outerHTML = '';
            } else {
                //set timeout 1 second
                console.log('try next');
                setTimeout(tryRemovePopup, DELAY);
            }
        }

        window.addEventListener('load', function (event) {
            tryRemovePanel();
            tryRemovePopup();
        });
    })();
</script>