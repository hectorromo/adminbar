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
})();



document.addEventListener("DOMContentLoaded", function(event) {
    var getCookie = function(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    };
    var hideBar = function() {
        adminbar.classList.add('hidden');
    }
    var showBar = function() {
        adminbar.classList.remove('hidden');
    }
    var adminbar = document.getElementById('adminbar');
    var isBarVisible = getCookie('adminbar_visible');
    
    if(isBarVisible == 'true') {
        showBar();
    } else {
        hideBar();
    }

    adminbar.addEventListener('click', function(e) {
        if(e.target.closest('.adminbar-close')) {
            e.preventDefault();
            hideBar();
            document.cookie = 'adminbar_visible=false; expires=Fri, 31 Dec 2024 23:59:59 GMT';
        }
        
        if(e.target.closest('.trigger')) {
            e.preventDefault();
            showBar();
            document.cookie = 'adminbar_visible=true; expires=Fri, 31 Dec 2024 23:59:59 GMT';
        }
    })
});