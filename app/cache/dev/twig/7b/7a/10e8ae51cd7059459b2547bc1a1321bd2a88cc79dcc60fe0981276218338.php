<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_7b7a10e8ae51cd7059459b2547bc1a1321bd2a88cc79dcc60fe0981276218338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  66 => 25,  62 => 24,  42 => 12,  30 => 5,  26 => 3,  546 => 490,  535 => 485,  525 => 481,  517 => 480,  494 => 462,  490 => 461,  471 => 445,  451 => 428,  431 => 411,  540 => 278,  529 => 482,  522 => 267,  506 => 265,  501 => 264,  497 => 463,  491 => 259,  484 => 257,  468 => 255,  463 => 254,  459 => 253,  453 => 249,  446 => 247,  430 => 245,  425 => 244,  421 => 243,  409 => 236,  399 => 234,  392 => 230,  388 => 229,  384 => 228,  380 => 227,  357 => 209,  341 => 196,  332 => 190,  323 => 184,  314 => 178,  298 => 165,  290 => 160,  282 => 155,  274 => 150,  259 => 137,  239 => 120,  205 => 88,  198 => 86,  188 => 84,  183 => 83,  177 => 80,  171 => 76,  164 => 74,  154 => 72,  149 => 71,  143 => 68,  137 => 64,  130 => 62,  120 => 60,  115 => 59,  109 => 56,  102 => 52,  98 => 51,  94 => 50,  23 => 3,  162 => 99,  135 => 75,  126 => 69,  117 => 63,  99 => 51,  90 => 49,  81 => 39,  72 => 33,  47 => 16,  40 => 14,  24 => 2,  22 => 2,  19 => 1,  5175 => 4903,  5172 => 4902,  5167 => 4897,  5164 => 4896,  5159 => 4871,  5156 => 4870,  5151 => 4841,  5148 => 4840,  5142 => 12,  5136 => 9,  5061 => 4973,  4991 => 4905,  4989 => 4902,  4984 => 4899,  4982 => 4896,  4976 => 4893,  4963 => 4885,  4951 => 4876,  4946 => 4874,  4943 => 4873,  4941 => 4870,  4936 => 4868,  4918 => 4853,  4906 => 4843,  4904 => 4840,  4889 => 4828,  4883 => 4825,  4879 => 4824,  4875 => 4823,  4871 => 4822,  4867 => 4821,  56 => 33,  48 => 14,  25 => 4,  92 => 24,  87 => 26,  85 => 24,  82 => 23,  79 => 29,  74 => 15,  69 => 41,  67 => 15,  64 => 14,  61 => 13,  55 => 10,  52 => 15,  46 => 14,  43 => 15,  37 => 10,  34 => 2,  1968 => 1853,  1965 => 1852,  1915 => 1805,  1886 => 1779,  1876 => 1772,  1866 => 1765,  1855 => 1757,  1845 => 1750,  1835 => 1743,  1825 => 1736,  1815 => 1729,  1805 => 1722,  1795 => 1715,  435 => 358,  403 => 235,  371 => 300,  346 => 278,  336 => 271,  108 => 57,  91 => 35,  77 => 21,  73 => 42,  70 => 26,  63 => 27,  60 => 17,  53 => 11,  50 => 15,  39 => 4,  35 => 9,  32 => 6,);
    }
}
