<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        <div>
            <svg id="hs" width="400" height="400" xmlns="http://www.w3.org/2000/svg">
                <defs>
                   
                   <filter id="glow">
                         <fegaussianblur class="blur" result="coloredBlur" stddeviation="8"></fegaussianblur>
                         <femerge>
                           <femergenode in="coloredBlur"></femergenode>
                           <femergenode in="coloredBlur"></femergenode>
                           <femergenode in="coloredBlur"></femergenode>
                           <femergenode in="SourceGraphic"></femergenode>
                         </femerge>
                  </filter>
                  
                  <filter id="filter-broken" filterUnits="objectBoundingBox" x="0" y="0" width="100%" height="100%" color-interpolation-filters="sRGB">
                     <feImage preserveAspectRatio="xMidYMid meet" xlink:href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 800 800'%3E%3Crect width='70%25' height='70%25' fill='white'/%3E%3Ccircle cx='50%25' cy='50%25' r='500' %0Afill='none' stroke='black' stroke-width='950' stroke-dasharray='200'/%3E%3C/svg%3E" result="lense"/>
                     <feDisplacementMap scale="10" xChannelSelector="B" yChannelSelector="G" in2="lense" in="SourceGraphic" result="glass-effect"/>
                     <feMerge>
                       <feMergeNode in="SourceGraphic"/>
                       <feMergeNode in="glass-effect"/>
                     </feMerge>
                  </filter>
                </defs>
                 
                   <style type="text/css">
                 <![CDATA[
                   #svg_8{transform-origin:center;}
                     
               svg {
                 position: absolute; 
                 top: 50%; 
                 left: 50%; 
                 transform: translate(-50%, -50%); 
                 filter: url('#filter-broken');
                 /*
                 url('#glow');
                 */
               }
               #svg_12 {
                 url('#glow');
                 mix-blend-mode:multiply;
                 transform-origin:center;
               }
               .path {
                 animation:  animation1 3s ease-in-out 1s infinite alternate;
                 fill-opacity: .25;
               }
               .p_0{
                 animation:  animation2 3s ease-in-out .5s infinite alternate;
               }
               
               @keyframes animation1 {
                 from {transform: perspective(400px) rotateX(20deg);}
                 to {transform: perspective(400px) rotateX(-20deg);}
                 from {transform: perspective(400px) rotateY(20deg);}
                 to {transform: perspective(400px) rotateY(-20deg);}  
                 from {stroke-width: 1;}
                 to {stroke-width: 9;}
               }
               
               @keyframes animation2 {
                 from {transform: perspective(400px) rotateX(20deg);}
                 to {transform: perspective(400px) rotateX(-20deg);}
                 from {transform: perspective(400px) rotateY(20deg);}
                 to {transform: perspective(400px) rotateY(-20deg);}  
                 from {stroke-width: 1;}
                 to {stroke-width: 2;}
                 from {stroke-opacity: .4;}
                 to {stroke-opacity: 1;}
               }
               
                  ]]>
                 </style>
                 
                
                 
                <g>   
                <g fill="#1a1b1f" id="svg_8">
                  <path class="p_0" stroke-width="1.5" stroke="#000000" id="svg_6" d="m302.47663,282.55895c-11.5319,-4.19342 -12.58025,5.76595 -33.28525,-1.57253l-40.62373,-14.67696l40.62373,-14.67696c20.705,-7.60057 21.75335,2.62089 33.28525,-1.57253c4.71759,-1.57253 7.60057,-7.86266 5.76595,-12.58025c-1.57253,-4.71759 -2.88297,-4.19342 -4.45551,-8.91101c-1.57253,-4.71759 -0.52418,-4.97968 -2.09671,-9.69728c-1.57253,-4.71759 -7.86266,-7.60057 -12.58025,-5.76595c-11.5319,4.19342 -5.76595,12.58025 -26.47095,20.18082l-62.63917,22.27753l-62.63917,-22.80171c-20.705,-7.60057 -15.20114,-15.9874 -26.47095,-20.18082c-4.71759,-1.57253 -11.00772,1.31044 -12.58025,5.76595c-1.57253,4.71759 -0.52418,4.97968 -2.09671,9.69728c-1.57253,4.71759 -2.88297,4.19342 -4.45551,8.91101c-1.57253,4.71759 1.31044,11.00772 5.76595,12.58025c11.5319,4.19342 12.58025,-5.76595 33.28525,1.57253l40.62373,14.67696l-40.62373,14.67696c-20.705,7.60057 -21.75335,-2.62089 -33.28525,1.57253c-4.71759,1.57253 -7.60057,7.86266 -5.76595,12.58025c1.57253,4.71759 2.88297,4.19342 4.45551,8.91101c1.57253,4.71759 0.52418,4.97968 2.09671,9.69728c1.57253,4.71759 7.86266,7.60057 12.58025,5.76595c11.5319,-4.19342 5.76595,-12.58025 26.47095,-20.18082l62.63917,-22.27753l62.63917,22.80171c20.705,7.60057 15.20114,15.9874 26.47095,20.18082c4.71759,1.57253 11.00772,-1.31044 12.58025,-5.76595c1.57253,-4.71759 0.52418,-4.97968 2.09671,-9.69728c1.57253,-4.71759 2.88297,-4.19342 4.45551,-8.91101c1.83462,-4.71759 -1.04835,-11.00772 -5.76595,-12.58025z" fill="null"/>
                  <path class="p_0" stroke-width="1.5" stroke="#000000" id="svg_7" d="m200,57.68695c-34.85778,0 -62.90126,28.04348 -62.90126,62.90126l0,55.0386c0,5.76595 3.40715,13.62861 7.60057,17.55993l18.60829,17.29785c4.19342,3.93133 8.91101,11.26981 10.22145,16.24949s7.33848,9.1731 13.10443,9.1731l26.20886,0c5.76595,0 11.79399,-4.19342 13.10443,-9.1731s6.02804,-12.31816 10.22145,-16.24949l18.60829,-17.29785c4.19342,-3.93133 7.60057,-11.79399 7.60057,-17.55993l0,-55.0386c0.52418,-34.85778 -27.5193,-62.90126 -62.37708,-62.90126zm-30.14019,128.4234c-10.22145,0 -17.03576,-8.38683 -17.03576,-17.03576c0,-8.64892 8.12475,-14.41487 18.3462,-14.41487s18.3462,5.50386 18.3462,14.41487c0,8.64892 -9.69728,17.03576 -19.65664,17.03576zm30.14019,23.58797c-5.24177,0 -7.86266,-2.62089 -7.86266,-7.86266s5.24177,-15.72531 7.86266,-15.72531s7.86266,10.48354 7.86266,15.72531s-2.62089,7.86266 -7.86266,7.86266zm30.14019,-23.58797c-10.22145,0 -19.65664,-8.38683 -19.65664,-17.03576c0,-8.64892 8.12475,-14.41487 18.3462,-14.41487s18.3462,5.50386 18.3462,14.41487c0,8.64892 -6.8143,17.03576 -17.03576,17.03576z" fill="null"/>
                   
                  <path id="svg_12" class="path" d="m88.5,80.45313l272.5,79.54688l-231,189l-41.5,-268.54688z" stroke-opacity="null" stroke-width="1.5" stroke="#000000" fill="none"/>
                  
                     <path id="svg_13" class="path" d="m88.5,80.45313l272.5,79.54688l-231, 189l-41.5, -268.54688z" stroke-opacity="null" stroke-width=".3" stroke="#e29e29" fill="none" transform="rotate(45)"/>
               
               
                  </g>
                
                </g>
                   <animateMotion dur="5s" repeatCount="indefinite" rotate="auto-reverse">
                     <mpath href="#svg_13"/>
                   </animateMotion>
               </svg>
               
        </div>
        <script src="{{asset('assets/js/ani.js')}}"></script>
    </body>
</html>
