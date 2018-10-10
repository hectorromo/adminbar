(function() {
    /**
     * Element.closest() polyfill
     * https://developer.mozilla.org/en-US/docs/Web/API/Element/closest#Polyfill
     */
    if (!Element.prototype.closest) {
        if (!Element.prototype.matches) {
            Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
        }
        Element.prototype.closest = function (s) {
            var el = this;
            var ancestor = this;
            if (!document.documentElement.contains(el)) return null;
            do {
                if (ancestor.matches(s)) return ancestor;
                ancestor = ancestor.parentElement;
            } while (ancestor !== null);
            return null;
        };
    }


    var adminbar = document.getElementById('adminbar');

    adminbar.addEventListener('click', function(e) {
        
        if(e.target.closest('.adminbar-close')) {
            e.preventDefault();
            adminbar.classList.add('hidden');
        }
        
        if(e.target.closest('.trigger')) {
            e.preventDefault();
            adminbar.classList.remove('hidden');
        }
    })
})();