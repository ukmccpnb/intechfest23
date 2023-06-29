@extends('landing.main')

{{-- judul halaman disini --}}
@section('title', 'Intechfest')
@section('content')

{{-- navbar --}}
@include('landing.layout.navbar')

{{-- hero section --}}
<section id="home" class="bg-white relative overflow-y-hidden" data-aos="fade-down" data-aos-duration="1000">
    {{-- abstract --}}
    {{-- <img class="absolute bottom-0 right-0 -z-10" src="{{asset('images/abstract/Group 45.png')}}"
        alt="abstract image"> --}}
    {{-- hero --}}
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="place-self-center lg:col-span-8">
            <h1
                class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                Intechfest</h1>
            <p
                class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 text-justify">
                Information and Technology Festival merupakan brand kegiatan terbesar yang dimiliki oleh Unit
                Kegiatan
                Computer Club
                Politeknik Negeri Bali yang dilaksanakan setiap 1 (satu) tahun sekali</p>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-lightblue hover:bg-primary-blue focus:ring-4 focus:ring-teal-500">
                Daftar Lomba
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Hubungi Panitia
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-4 lg:flex relative">
            {{-- ivy --}}
            <svg id="eySQE3VbFja1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 890.67 918" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                <g id="eySQE3VbFja2" transform="matrix(.801023 0 0 0.801024 89.252943 122.95631)">
                    <g id="eySQE3VbFja3" transform="matrix(.998546 0.053916-.053916 0.998546 46.668606-24.924751)">
                        <g>
                            <path
                                d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,41,40.68,48,51.33c8.17,12.4-2.158504,28.217289-9.218504,37.907289s-16.960909,11.957613-37.790909,6.107613c-27-7.57-38.349668-18.66086-61.839668-37.79086-17.9-14.58-47.570919-41.334042-57.010919-59.734042s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                transform="translate(-6750.83-6746.5)" fill="#132c33" />
                        </g>
                        <g mask="url(#eySQE3VbFja17)">
                            <g>
                                <path
                                    d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,41,40.68,48,51.33c8.17,12.4,9,30.51,1.94,40.2s-17.69,18.5-38.52,12.65c-27-7.57-54.94-26.45-78.43-45.58-17.9-14.58-41.41-42.38-50.85-60.78s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                    transform="translate(-6750.83-6746.5)" fill="#132c33" />
                                <path
                                    d="M7479.58,7310.17c-7.58,1.91-20.64,5.89-24.83,14.27-5.37,10.74-2.25,23.31-1.42,28.81s-4.25-2.08-5.91-7.92s0-24.58,0-24.58L7459.5,7309l20.08-2.42Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                                <path
                                    d="M7585.83,7385.83c0,0,10.84,33,1.5,44s-44,15-53.84,10-8.49,19-8.49,19l42.67,17.5l54.16-4c0,0,19.84-15.16,19.67-19.66s-5.83-33.67-6.33-35.34-21-27.5-21-27.5Z"
                                    transform="translate(-6750.83-6746.5)" fill="#0f2329" />
                            </g>
                            <mask id="eySQE3VbFja17" mask-type="alpha">
                                <g transform="translate(.000001 0.000001)">
                                    <path
                                        d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,34.039441,30.486138,41.039441,41.136138c8.17,12.4,1.531201,40.65726-6.111778,47.470679-10.358858,9.234519-27.336247,6.521721-41.67313,2.69071-19.563073-5.22752-36.208855-22.130509-59.698855-41.260509-17.9-14.58-41.975678-33.817018-51.415678-52.217018s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                        transform="translate(-6750.83-6746.5)" fill="#132c33" />
                                </g>
                            </mask>
                        </g>
                        <g>
                            <path
                                d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,32.034971,30.822086,39.034971,41.472086c8.17,12.4,9,30.51,1.94,40.2s-17.69,18.5-38.52,12.65c-27-7.57-110.874971-78.102086-120.314971-96.502086s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                transform="translate(-6750.83-6746.5)" fill="none" stroke="#1f0021" stroke-width="12"
                                stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g id="eySQE3VbFja22" transform="matrix(.954886-.296972 0.296972 0.954886-167.986321 102.666566)">
                        <g>
                            <path
                                d="M6880.2,7307.21c-17.13-6.29-27.12-16.87-57.69-44.69-32.36-29.44-60.21-58.91-61.34-83.48s24.86-49.53,55.55-35.51s99.948337,93.758882,105.088337,98.138882s12.381663,21.141118,6.461663,37.931118-29.21,34.54-48.07,27.61Z"
                                transform="translate(-6750.83-6746.5)" fill="#132c33" />
                        </g>
                        <g mask="url(#eySQE3VbFja31)">
                            <g>
                                <path
                                    d="M6788.17,7146.33c-6.84,7.5-16.67,18.17-18,29s2,17.5,4.5,23.34-3.5,3.69-3.5,3.69l-20.34-29.53l7.17-31.16l23.33-12.67Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                                <path
                                    d="M6878.33,7205c2.17,7.67,12.5,43.5,5.17,56.67s-7.5,18.66-25,16.66-26.67.4-26.67.4s34.67,37.1,35.17,38.1s45.83,2.17,50.5,1.67s25.17-36.17,25.17-36.17l-2.34-31.83-19.16-26.39Z"
                                    transform="translate(-6750.83-6746.5)" fill="#0d1f24" />
                            </g>
                            <mask id="eySQE3VbFja31" mask-type="alpha">
                                <path
                                    d="M6880.2,7307.21c-17.13-6.29-27.12-16.87-57.69-44.69-32.36-29.44-60.21-58.91-61.34-83.48s24.86-49.53,55.55-35.51s78.1,75.05,83.24,79.43s34.23,39.85,28.31,56.64-29.21,34.54-48.07,27.61Z"
                                    transform="translate(-6750.83-6746.5)" fill="#132c33" />
                            </mask>
                        </g>
                        <g transform="matrix(.997513 0.070485-.070485 0.997513 33.899074-5.456601)">
                            <path
                                d="M7493.62,7308.71c21.27,9.9,55.43,38.27,75,54.48c17.07,14.17,32.034971,30.822086,39.034971,41.472086c8.17,12.4,9,30.51,1.94,40.2s-17.69,18.5-38.52,12.65c-27-7.57-110.874971-78.102086-120.314971-96.502086s-9-36.32-1.69-44.79s25.08-16.57,44.55-7.51Z"
                                transform="matrix(.999999 0.001141-.001141 0.999999-7427.519313-6910.545894)"
                                fill="none" stroke="#1f0021" stroke-width="12" stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g id="eySQE3VbFja35" transform="matrix(.968553-.248808 0.248808 0.968553-189.691893 188.20965)">
                        <g>
                            <path
                                d="M7231.568741,7580.279961c3.25-19.41,22.191259-59.689961,38.381259-77.989961c7.51-8.47,23.54-20.33,43.42-12.87c17.66,6.62,26,25.87,21.62,42.86-3.72,14.4-31.359936,70.950328-43.869936,80.150328s-32.070774,12.849486-43.110774,4.749486-18.840549-22.389853-16.440549-36.899853Z"
                                transform="translate(-6750.83-6746.5)" fill="#132c33" />
                        </g>
                        <g mask="url(#eySQE3VbFja43)">
                            <g>
                                <path
                                    d="M7306.75,7492.58c-7.75,1.5-14.56,2.68-21.42,6.92s-12.1,10.5-19.33,17.5s6.59-17.41,6.59-17.41l17.25-8.87l11.46-1.41Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                                <path
                                    d="M7239.13,7569.63c2,4.87,5.75,13.12,13.37,14.5s14.13.5,28.75-6.63s40.75-45,43.25-49.87c2.390658-4.272232,5.021544-8.405527,7.88-12.38l4.75,32c0,0-9.63,29.5-10,30s-24.38,34-24.38,34l-40.87,10.5-26-11.62-8.38-26Z"
                                    transform="translate(-6750.83-6746.5)" fill="#0f2329" />
                            </g>
                            <mask id="eySQE3VbFja43" mask-type="alpha">
                                <path
                                    d="M7232.664777,7581.741341c3.25-19.41,21.095223-61.151341,37.285223-79.451341c7.51-8.47,23.54-20.33,43.42-12.87c17.66,6.62,26,25.87,21.62,42.86-3.72,14.4-33.917355,70.584983-46.427355,79.784983s-30.974739,12.118796-42.014739,4.018796-16.283129-19.832438-13.883129-34.342438Z"
                                    transform="translate(-6750.83-6746.5)" fill="#132c33" />
                            </mask>
                        </g>
                        <g>
                            <path
                                d="M7232.263875,7580.27167c3.25-19.41,21.496125-59.68167,37.686125-77.98167c7.51-8.47,27.227308-24.665797,47.107308-17.205797c17.66,6.62,22.312692,30.205797,17.932692,47.195797-3.72,14.4-36.604793,71.067881-49.114793,80.267881s-29.989081,9.741163-41.029081,1.641163-14.982251-19.407374-12.582251-33.917374Z"
                                transform="translate(-6750.83-6746.5)" fill="none" stroke="#1f0021" stroke-width="12"
                                stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g id="eySQE3VbFja47" transform="matrix(.939531 0.342464-.342464 0.939531 288.661303-55.905592)">
                        <g>
                            <path
                                d="M7069.73,7509.86c2.12-6.85,10.61-20,30.51-16.7s46.390517,37.727995,57.530517,52.147995s20.629065,40.78124,21.689065,51.15124-5.550074,21.562336-17.770074,24.742336c-12.65,3.29-30.647283,5.168125-44.627283-10.521875s-28.822225-21.089696-40.172225-49.209696c-9.78-24.24-12.21-35.28-7.16-51.61Z"
                                transform="translate(-6750.83-6746.5)" fill="#132c33" />
                        </g>
                        <g mask="url(#eySQE3VbFja55)">
                            <g>
                                <path
                                    d="M7089.19,7496.81c-3,3.63-8.72,6.9-11.88,16-2.12,6.13-3.32,16.81-2.37,22.25c1.12,6.44.75,9.75-1.38,10.63s-9.5-22.63-9.5-22.63l9.25-25.37l12.75-7.63Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                                <path
                                    d="M7154,7554c2.67,8.5,14.33,55.83,2.83,63.67-9.31,6.34-29.66-.17-35-1.34s11.67,33,11.67,33l54.5,15.17l26.67-34.17-13.5-42.83-34.23-44.67Z"
                                    transform="translate(-6754.422676-6751.290227)" fill="#0f2329" />
                            </g>
                            <mask id="eySQE3VbFja55" mask-type="alpha">
                                <path
                                    d="M7069.73,7509.86c2.12-6.85,10.61-20,30.51-16.7s42.232852,31.330529,53.371577,45.749094s21.31282,26.335929,22.909566,49.488688-3.882392,29.478153-16.102392,32.658153c-12.65,3.29-27.663721,8.342444-41.643721-7.347556s-30.53503-24.118379-41.88503-52.238379c-9.78-24.24-12.21-35.28-7.16-51.61Z"
                                    transform="translate(-6750.83-6746.5)" fill="#132c33" />
                            </mask>
                        </g>
                        <g>
                            <path
                                d="M7069.73,7509.86c5.368432-9.247952,16.467761-18.237593,36.367761-14.937593s38.159064,33.973274,49.299064,48.393274s22.627536,37.803279,23.01008,53.105062-10.6569,29.188534-25.193593,31.101257c-14.553505,1.914935-30.417464-8.192819-40.472475-18.887128-13.250828-14.093316-23.145856-26.736856-35.850837-47.164872-8.255331-13.273537-15.007554-38.09138-7.16-51.61Z"
                                transform="translate(-6752.027559-6749.294298)" fill="none" stroke="#1f0021"
                                stroke-width="12" stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g id="eySQE3VbFja59" transform="translate(.000001 0)">
                        <g mask="url(#eySQE3VbFja65)">
                            <g>
                                <path
                                    d="M6994.56,7299.18c24.43-26.4,53.28-35.34,77.21-42s140.55-17.83,192.49-16.57c31.6.78,78.26,6.3,100.56,19.11c23.08,13.25,36.39,37.3,41.93,59.64c7.85,31.66-9.06,72.9-38.79,101.61-22.28,21.53-83.74,57.44-163.13,64.43s-152.38-20.74-175.95-36.2-52.08-40.74-56.43-78.3c-3.81-32.9,1.81-49.79,22.11-71.72Z"
                                    transform="translate(-6750.83-6746.5)" fill="#50c4d3" />
                                <path
                                    d="M7373,7277c2.25,12,8.75,46.5,1.95,71-6.44,23.22-29.31,47.52-48.89,59.52-28.23,17.31-70.81,33.9-91.31,39s-65.75,13.78-102.5,13.75c-25.75,0-65.38-2.37-77.55-5.39-23.64-5.86-15.95-1.36-15.95-1.36l-7.69,20.33l124.86,25.34l157.58-22.67l87-69.62l21.33-87.13Z"
                                    transform="translate(-6750.83-6746.5)" fill="#49b2bf" />
                                <path
                                    d="M7026.83,7284c-12.51,4.38-42.34,33.4-49.17,45.39s-6.32,7.48-6.32,7.48l14.79-32.76l34-28l10.79,6.19Z"
                                    transform="translate(-6750.83-6746.5)" fill="#fff" />
                            </g>
                            <mask id="eySQE3VbFja65" mask-type="alpha">
                                <path
                                    d="M6994.56,7299.18c24.43-26.4,53.28-35.34,77.21-42s140.55-17.83,192.49-16.57c31.6.78,78.26,6.3,100.56,19.11c23.08,13.25,36.39,37.3,41.93,59.64c7.85,31.66-9.06,72.9-38.79,101.61-22.28,21.53-83.74,57.44-163.13,64.43s-152.38-20.74-175.95-36.2-52.08-40.74-56.43-78.3c-3.81-32.9,1.81-49.79,22.11-71.72Z"
                                    transform="translate(-6750.83-6746.5)" fill="#50c4d3" />
                            </mask>
                        </g>
                        <g>
                            <g>
                                <path d="M7150.17,7351.92c-.88,18.87,2.16,51.75,5.75,63.25"
                                    transform="translate(-6741.707367-6748.246955)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" />
                                <path d="M7160.25,7436.92c1.08,4.08,3.42,11.75,3.92,13"
                                    transform="translate(-6741.013597-6748.399946)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" />
                                <path
                                    d="M7212.785614,7349.640243c33.090026-3.72181,87.13176-19.038473,101.964386-29.890243c3,6.5,6.75,21.5,6.5,25.75-17.2506,12.311714-68.92642,25.838939-103.5,30.75.13909-3.499947-4.213585-21.149056-4.964386-26.609757Z"
                                    transform="translate(-6739.453198-6752.188395)" fill="none" stroke="#fff"
                                    stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7245.48,7407c0-6.007765-.69985-13.788409-2.46-21.73"
                                    transform="translate(-6740.772125-6750.443661)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="12" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7278.47,7397.58c.344614-3.689227-.596827-16.95356-2.100045-20.527125"
                                    transform="translate(-6739.865559-6750.691892)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="12" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7308.454693,7386.996654c.25-5.49-.764693-15.156654-2.294693-19.536654"
                                    transform="translate(-6739.231524-6751.534909)" fill="#50c4d3" stroke="#fff"
                                    stroke-width="12" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7048.25,7309.13c2.58561,1.376233,5.368495,2.344339,8.25,2.87"
                                    transform="translate(-6757.783245-6755.513454)" fill="none" stroke="#fff"
                                    stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" />
                                <line x1="321.35" y1="567.77" x2="320.9" y2="567.77"
                                    transform="translate(-4.340212-6.004844)" fill="none" stroke="#fff" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10" />
                                <path d="M7338.941355,7276.487226c-1.69,2.69-11.191355,7.142774-12.881355,7.892774"
                                    transform="translate(-6745.65772-6743.118127)" fill="none" stroke="#fff"
                                    stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" />
                                <line x1="564.96" y1="542.92" x2="565.29" y2="542.75"
                                    transform="translate(1.790403 3.381873)" fill="none" stroke="#fff" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10" />
                                <path d="" transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                    stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" />
                                <g transform="matrix(1.37793 0 0 1.37793-98.044985-239.583788)">
                                    <path
                                        d="M7023.12,7392c3.770295,2.286128,7.74793,4.211331,11.88,5.75-1-4.76-1.73-9.55-2.46-14.36-4.46-.85-9.08-2.22-13.56-3c.861875,4.035664,2.253956,7.939544,4.14,11.61Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7030.71,7369.82c.42,4.52,1.09,9,1.81,13.47-8.66-3.76-13.23-8.7-16.06-17.73q7.08,2.3,14.25,4.26Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7029.77,7362.77c-.5,3.59-2.92,5.34-6.48,4-3.600545-1.314435-5.717674-5.044817-5-8.81.75-3.76,3.77-5,7-3.41c3.211648,1.377482,5.063003,4.774387,4.48,8.22Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7038.34,7398.46c4.463989,1.339889,9.010203,2.388759,13.61,3.14-1.376961-4.933102-2.468767-9.941389-3.27-15-4.29-.64-8.52-1.53-12.76-2.44.6,4.84,1.37,9.55,2.42,14.3Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7035.9,7384c-.63-4.48-1.29-8.95-1.73-13.45c6.67,4,11.3,8.78,14.51,15.89-4.3-.61-8.53-1.5-12.78-2.44Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7034.18,7370.59c4.42.94,8.82,2,13.25,2.9-.18-4.59-.27-9.19-.44-13.79-4.19-.64-8.83-1.5-13-2.45-.16189,4.447023-.098475,8.899391.19,13.34Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7047.44,7373.48c.43,4.33.88,8.66,1.24,13c7.11-1.6,10-4.94,11.88-12.28-4.37-.09-8.75-.49-13.12-.72Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M7047,7359.7c.16,4.57.25,9.15.44,13.72c7.53-1.59,12.31-5,14.35-12.46-4.949051-.154073-9.886207-.574683-14.79-1.26Z"
                                        transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff"
                                        stroke-width="2" stroke-miterlimit="10" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <path d="M7022.17,7275.83c71.029925,27.820608,242.825579,25.115165,299.33-16.66"
                                transform="translate(-6733.695956-6741.359736)" fill="none" stroke="#1f0021"
                                stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M6989.05,7298.47c24.44-26.4,53.29-35.34,77.22-42s140.55-17.84,192.49-16.57c31.6.77,78.26,6.3,100.56,19.11c23.08,13.25,36.39,37.3,41.93,59.64c7.85,31.66-9.06,72.9-38.79,101.61-22.28,21.52-83.74,57.44-163.14,64.43s-152.38-20.74-175.94-36.2-52.08-40.74-56.43-78.3c-3.81-32.88,1.81-49.79,22.1-71.72Z"
                                transform="translate(-6750.83-6746.5)" fill="none" stroke="#1f0021" stroke-width="12"
                                stroke-miterlimit="10" />
                        </g>
                    </g>
                    <g transform="matrix(.999757 0.022026-.022026 0.999757 13.183015-10.104449)">
                        <g id="eySQE3VbFja93" transform="matrix(.995495-.094811 0.094811 0.995495-39.185926 41.936789)">
                            <g>
                                <path
                                    d="M6896.76,6945.87q-2.3,2.58-4.49,5.17c-11.29,13.38-25.57,43.74-32.55,66.74s-6.37,63.37,9.3,91.41c20.18,36.1,62,64.07,110.21,80.76c50.22,17.38,93.47,30.84,186,32s178-8.72,222.27-31.4c58.6-30,116.49-73.75,116.49-144.79c0-41.21-25.05-76.7-53.54-101.28v0c0,0-26.33-104.58-45.86-104.45-18.3.12-71.52,50.23-71.52,50.23v0c-34.3-8.36-73.68-14.38-117.16-18.26-81.22-7.26-164.83-1.58-214.85,11.27v0c0,0-56.48-36.51-69.39-34.41s-34.92,97-34.92,97Z"
                                    transform="translate(-6750.83-6746.5)" fill="#50c4d3" stroke="#000"
                                    stroke-width="12" stroke-linejoin="round" />
                            </g>
                            <g id="eySQE3VbFja96" transform="translate(-4.991246-2.804138)">
                                <g>
                                    <path
                                        d="M7097.79,7048.27c.22,27.89-7.81,57.7-39.52,62s-54.16-20.3-51.72-53.18s20.8-61.25,45.53-62.21s45.49,26.4,45.71,53.39Z"
                                        transform="translate(-6750.83-6746.5)" fill="#1f0021" />
                                    <path
                                        d="M7208,7063.2c1.82-27.77,11.78-58.06,38.9-61.38c27.51-3.37,50.8,20.42,50.57,58.35-.23,39.5-19.95,59.88-44.65,60.68-28.3.91-47.15-21.85-44.82-57.65Z"
                                        transform="translate(-6750.83-6746.5)" fill="#1f0021" />
                                </g>
                                <g id="eySQE3VbFja100" mask="url(#eySQE3VbFja106)">
                                    <g>
                                        <ellipse rx="18.94" ry="19.31" transform="translate(280.23 276.31)"
                                            fill="#fff" />
                                        <circle r="5.06" transform="translate(313.98 341.31)" fill="#fff" />
                                        <ellipse rx="18.58" ry="19.58" transform="translate(479.92 284.25)"
                                            fill="#fff" />
                                        <ellipse rx="5.72" ry="5.74" transform="translate(521.39 345.93)" fill="#fff" />
                                    </g>
                                    <mask id="eySQE3VbFja106" mask-type="alpha">
                                        <g>
                                            <path
                                                d="M7097.79,7048.27c.22,27.89-7.81,57.7-39.52,62s-54.16-20.3-51.72-53.18s20.8-61.25,45.53-62.21s45.49,26.4,45.71,53.39Z"
                                                transform="translate(-6750.83-6746.5)" fill="#1f0021" />
                                            <path
                                                d="M7208,7063.2c1.82-27.77,11.78-58.06,38.9-61.38c27.51-3.37,50.8,20.42,50.57,58.35-.23,39.5-19.95,59.88-44.65,60.68-28.3.91-47.15-21.85-44.82-57.65Z"
                                                transform="translate(-6750.83-6746.5)" fill="#1f0021" />
                                        </g>
                                    </mask>
                                </g>
                            </g>
                            <g>
                                <path
                                    d="M6799.79,6990.38c4.67-82,67.39-190.6,209.44-219.18c210.53-42.37,432.46-21,524.82,150.91c64.29,119.69,6.7,242.62-110.3,288.27-142.42,55.56-299.09,46.05-424.24,15.77-136.62-33.07-206.51-117.15-199.72-235.77Z"
                                    transform="translate(-6750.83-6746.5)" fill="none" stroke="#1f0021"
                                    stroke-width="12" stroke-linejoin="round" />
                                <path d="M7033.31,6841.46c-34.54,3.76-81.85,24.78-105.12,59.32"
                                    transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff" stroke-width="29"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7319.59,7166.44c34.65-2.56,82.65-21.94,107.11-55.65"
                                    transform="translate(-6750.83-6746.5)" fill="none" stroke="#fff" stroke-width="29"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <line x1="150.78" y1="212.28" x2="151.47" y2="207.16" fill="none" stroke="#fff"
                                    stroke-width="29" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </g>
                    </g>
                </g>
                <script>
                    <![CDATA[
                    !function(t,n){"object"==typeof exports&&"undefined"!=typeof module?module.exports=n():"function"==typeof define&&define.amd?define(n):((t="undefined"!=typeof globalThis?globalThis:t||self).__SVGATOR_PLAYER__=t.__SVGATOR_PLAYER__||{},t.__SVGATOR_PLAYER__["5c7f360c"]=n())}(this,(function(){"use strict";function t(t,n){var e=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(t,n).enumerable}))),e.push.apply(e,r)}return e}function n(n){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?t(Object(r),!0).forEach((function(t){o(n,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(n,Object.getOwnPropertyDescriptors(r)):t(Object(r)).forEach((function(t){Object.defineProperty(n,t,Object.getOwnPropertyDescriptor(r,t))}))}return n}function e(t){return(e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function r(t,n){if(!(t instanceof n))throw new TypeError("Cannot call a class as a function")}function i(t,n){for(var e=0;e<n.length;e++){var r=n[e];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function u(t,n,e){return n&&i(t.prototype,n),e&&i(t,e),t}function o(t,n,e){return n in t?Object.defineProperty(t,n,{value:e,enumerable:!0,configurable:!0,writable:!0}):t[n]=e,t}function a(t){return(a=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function l(t,n){return(l=Object.setPrototypeOf||function(t,n){return t.__proto__=n,t})(t,n)}function s(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(t){return!1}}function f(t,n,e){return(f=s()?Reflect.construct:function(t,n,e){var r=[null];r.push.apply(r,n);var i=new(Function.bind.apply(t,r));return e&&l(i,e.prototype),i}).apply(null,arguments)}function c(t,n){if(n&&("object"==typeof n||"function"==typeof n))return n;if(void 0!==n)throw new TypeError("Derived constructors may only return object or undefined");return function(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}(t)}function h(t,n,e){return(h="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(t,n,e){var r=function(t,n){for(;!Object.prototype.hasOwnProperty.call(t,n)&&null!==(t=a(t)););return t}(t,n);if(r){var i=Object.getOwnPropertyDescriptor(r,n);return i.get?i.get.call(e):i.value}})(t,n,e||t)}function v(t){return function(t){if(Array.isArray(t))return y(t)}(t)||function(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}(t)||function(t,n){if(!t)return;if("string"==typeof t)return y(t,n);var e=Object.prototype.toString.call(t).slice(8,-1);"Object"===e&&t.constructor&&(e=t.constructor.name);if("Map"===e||"Set"===e)return Array.from(t);if("Arguments"===e||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e))return y(t,n)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function y(t,n){(null==n||n>t.length)&&(n=t.length);for(var e=0,r=new Array(n);e<n;e++)r[e]=t[e];return r}Number.isInteger||(Number.isInteger=function(t){return"number"==typeof t&&isFinite(t)&&Math.floor(t)===t}),Number.EPSILON||(Number.EPSILON=2220446049250313e-31);var g=d(Math.pow(10,-6));function d(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:6;if(Number.isInteger(t))return t;var e=Math.pow(10,n);return Math.round((+t+Number.EPSILON)*e)/e}function p(t,n){var e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:g;return Math.abs(t-n)<e}var m=Math.PI/180;function b(t){return t}function w(t,n,e){var r=1-e;return 3*e*r*(t*r+n*e)+e*e*e}function x(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:1,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1;return t<0||t>1||e<0||e>1?null:p(t,n)&&p(e,r)?b:function(i){if(i<=0)return t>0?i*n/t:0===n&&e>0?i*r/e:0;if(i>=1)return e<1?1+(i-1)*(r-1)/(e-1):1===e&&t<1?1+(i-1)*(n-1)/(t-1):1;for(var u,o=0,a=1;o<a;){var l=w(t,e,u=(o+a)/2);if(p(i,l))break;l<i?o=u:a=u}return w(n,r,u)}}function A(){return 1}function k(t){return 1===t?1:0}function _(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;if(1===t){if(0===n)return k;if(1===n)return A}var e=1/t;return function(t){return t>=1?1:(t+=n*e)-t%e}}var S=Math.sin,O=Math.cos,j=Math.acos,M=Math.asin,P=Math.tan,E=Math.atan2,I=Math.PI/180,R=180/Math.PI,F=Math.sqrt,N=function(){function t(){var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,u=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,a=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0;r(this,t),this.m=[n,e,i,u,o,a],this.i=null,this.w=null,this.s=null}return u(t,[{key:"determinant",get:function(){var t=this.m;return t[0]*t[3]-t[1]*t[2]}},{key:"isIdentity",get:function(){if(null===this.i){var t=this.m;this.i=1===t[0]&&0===t[1]&&0===t[2]&&1===t[3]&&0===t[4]&&0===t[5]}return this.i}},{key:"point",value:function(t,n){var e=this.m;return{x:e[0]*t+e[2]*n+e[4],y:e[1]*t+e[3]*n+e[5]}}},{key:"translateSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;if(!t&&!n)return this;var e=this.m;return e[4]+=e[0]*t+e[2]*n,e[5]+=e[1]*t+e[3]*n,this.w=this.s=this.i=null,this}},{key:"rotateSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0;if(t%=360){var n=S(t*=I),e=O(t),r=this.m,i=r[0],u=r[1];r[0]=i*e+r[2]*n,r[1]=u*e+r[3]*n,r[2]=r[2]*e-i*n,r[3]=r[3]*e-u*n,this.w=this.s=this.i=null}return this}},{key:"scaleSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:1;if(1!==t||1!==n){var e=this.m;e[0]*=t,e[1]*=t,e[2]*=n,e[3]*=n,this.w=this.s=this.i=null}return this}},{key:"skewSelf",value:function(t,n){if(n%=360,(t%=360)||n){var e=this.m,r=e[0],i=e[1],u=e[2],o=e[3];t&&(t=P(t*I),e[2]+=r*t,e[3]+=i*t),n&&(n=P(n*I),e[0]+=u*n,e[1]+=o*n),this.w=this.s=this.i=null}return this}},{key:"resetSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:1,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:0,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:0,u=arguments.length>5&&void 0!==arguments[5]?arguments[5]:0,o=this.m;return o[0]=t,o[1]=n,o[2]=e,o[3]=r,o[4]=i,o[5]=u,this.w=this.s=this.i=null,this}},{key:"recomposeSelf",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null,i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:null;return this.isIdentity||this.resetSelf(),t&&(t.x||t.y)&&this.translateSelf(t.x,t.y),n&&this.rotateSelf(n),e&&(e.x&&this.skewSelf(e.x,0),e.y&&this.skewSelf(0,e.y)),!r||1===r.x&&1===r.y||this.scaleSelf(r.x,r.y),i&&(i.x||i.y)&&this.translateSelf(i.x,i.y),this}},{key:"decompose",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,e=this.m,r=e[0]*e[0]+e[1]*e[1],i=[[e[0],e[1]],[e[2],e[3]]],u=F(r);if(0===u)return{origin:{x:d(e[4]),y:d(e[5])},translate:{x:d(t),y:d(n)},scale:{x:0,y:0},skew:{x:0,y:0},rotate:0};i[0][0]/=u,i[0][1]/=u;var o=e[0]*e[3]-e[1]*e[2]<0;o&&(u=-u);var a=i[0][0]*i[1][0]+i[0][1]*i[1][1];i[1][0]-=i[0][0]*a,i[1][1]-=i[0][1]*a;var l=F(i[1][0]*i[1][0]+i[1][1]*i[1][1]);if(0===l)return{origin:{x:d(e[4]),y:d(e[5])},translate:{x:d(t),y:d(n)},scale:{x:d(u),y:0},skew:{x:0,y:0},rotate:0};i[1][0]/=l,i[1][1]/=l,a/=l;var s=0;return i[1][1]<0?(s=j(i[1][1])*R,i[0][1]<0&&(s=360-s)):s=M(i[0][1])*R,o&&(s=-s),a=E(a,F(i[0][0]*i[0][0]+i[0][1]*i[0][1]))*R,o&&(a=-a),{origin:{x:d(e[4]),y:d(e[5])},translate:{x:d(t),y:d(n)},scale:{x:d(u),y:d(l)},skew:{x:d(a),y:0},rotate:d(s)}}},{key:"clone",value:function(){var t=this.m;return new this.constructor(t[0],t[1],t[2],t[3],t[4],t[5])}},{key:"toString",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:" ";if(null===this.s){var n=this.m.map((function(t){return d(t)}));1===n[0]&&0===n[1]&&0===n[2]&&1===n[3]?this.s="translate("+n[4]+t+n[5]+")":this.s="matrix("+n.join(t)+")"}return this.s}}],[{key:"create",value:function(t){return t?Array.isArray(t)?f(this,v(t)):t instanceof this?t.clone():(new this).recomposeSelf(t.origin,t.rotate,t.skew,t.scale,t.translate):new this}}]),t}();function T(t,n,e){return t>=.5?e:n}function q(t,n,e){return 0===t||n===e?n:t*(e-n)+n}function B(t,n,e){var r=q(t,n,e);return r<=0?0:r}function L(t,n,e){var r=q(t,n,e);return r<=0?0:r>=1?1:r}function C(t,n,e){return 0===t?n:1===t?e:{x:q(t,n.x,e.x),y:q(t,n.y,e.y)}}function D(t,n,e){var r=function(t,n,e){return Math.round(q(t,n,e))}(t,n,e);return r<=0?0:r>=255?255:r}function z(t,n,e){return 0===t?n:1===t?e:{r:D(t,n.r,e.r),g:D(t,n.g,e.g),b:D(t,n.b,e.b),a:q(t,null==n.a?1:n.a,null==e.a?1:e.a)}}function V(t,n){for(var e=[],r=0;r<t;r++)e.push(n);return e}function G(t,n){if(--n<=0)return t;var e=(t=Object.assign([],t)).length;do{for(var r=0;r<e;r++)t.push(t[r])}while(--n>0);return t}var Y,$=function(){function t(n){r(this,t),this.list=n,this.length=n.length}return u(t,[{key:"setAttribute",value:function(t,n){for(var e=this.list,r=0;r<this.length;r++)e[r].setAttribute(t,n)}},{key:"removeAttribute",value:function(t){for(var n=this.list,e=0;e<this.length;e++)n[e].removeAttribute(t)}},{key:"style",value:function(t,n){for(var e=this.list,r=0;r<this.length;r++)e[r].style[t]=n}}]),t}(),U=/-./g,Q=function(t,n){return n.toUpperCase()};function H(t){return"function"==typeof t?t:T}function J(t){return t?"function"==typeof t?t:Array.isArray(t)?function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:b;if(!Array.isArray(t))return n;switch(t.length){case 1:return _(t[0])||n;case 2:return _(t[0],t[1])||n;case 4:return x(t[0],t[1],t[2],t[3])||n}return n}(t,null):function(t,n){var e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:b;switch(t){case"linear":return b;case"steps":return _(n.steps||1,n.jump||0)||e;case"bezier":case"cubic-bezier":return x(n.x1||0,n.y1||0,n.x2||0,n.y2||0)||e}return e}(t.type,t.value,null):null}function Z(t,n,e){var r=arguments.length>3&&void 0!==arguments[3]&&arguments[3],i=n.length-1;if(t<=n[0].t)return r?[0,0,n[0].v]:n[0].v;if(t>=n[i].t)return r?[i,1,n[i].v]:n[i].v;var u,o=n[0],a=null;for(u=1;u<=i;u++){if(!(t>n[u].t)){a=n[u];break}o=n[u]}return null==a?r?[i,1,n[i].v]:n[i].v:o.t===a.t?r?[u,1,a.v]:a.v:(t=(t-o.t)/(a.t-o.t),o.e&&(t=o.e(t)),r?[u,t,e(t,o.v,a.v)]:e(t,o.v,a.v))}function K(t,n){var e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;return t&&t.length?"function"!=typeof n?null:("function"!=typeof e&&(e=null),function(r){var i=Z(r,t,n);return null!=i&&e&&(i=e(i)),i}):null}function W(t,n){return t.t-n.t}function X(t,n,r,i,u){var o,a="@"===r[0],l="#"===r[0],s=Y[r],f=T;switch(a?(o=r.substr(1),r=o.replace(U,Q)):l&&(r=r.substr(1)),e(s)){case"function":if(f=s(i,u,Z,J,r,a,n,t),l)return f;break;case"string":f=K(i,H(s));break;case"object":if((f=K(i,H(s.i),s.f))&&"function"==typeof s.u)return s.u(n,f,r,a,t)}return f?function(t,n,e){if(arguments.length>3&&void 0!==arguments[3]&&arguments[3])return t instanceof $?function(r){return t.style(n,e(r))}:function(r){return t.style[n]=e(r)};if(Array.isArray(n)){var r=n.length;return function(i){var u=e(i);if(null==u)for(var o=0;o<r;o++)t[o].removeAttribute(n);else for(var a=0;a<r;a++)t[a].setAttribute(n,u)}}return function(r){var i=e(r);null==i?t.removeAttribute(n):t.setAttribute(n,i)}}(n,r,f,a):null}function tt(t,n,r,i){if(!i||"object"!==e(i))return null;var u=null,o=null;return Array.isArray(i)?o=function(t){if(!t||!t.length)return null;for(var n=0;n<t.length;n++)t[n].e&&(t[n].e=J(t[n].e));return t.sort(W)}(i):(o=i.keys,u=i.data||null),o?X(t,n,r,o,u):null}function nt(t,n,e){if(!e)return null;var r=[];for(var i in e)if(e.hasOwnProperty(i)){var u=tt(t,n,i,e[i]);u&&r.push(u)}return r.length?r:null}function et(t,n){if(!n.settings.duration||n.settings.duration<0)return null;var e,r,i,u,o,a=function(t,n){if(!n)return null;var e=[];if(Array.isArray(n))for(var r=n.length,i=0;i<r;i++){var u=n[i];if(2===u.length){var o=null;if("string"==typeof u[0])o=t.getElementById(u[0]);else if(Array.isArray(u[0])){o=[];for(var a=0;a<u[0].length;a++)if("string"==typeof u[0][a]){var l=t.getElementById(u[0][a]);l&&o.push(l)}o=o.length?1===o.length?o[0]:new $(o):null}if(o){var s=nt(t,o,u[1]);s&&(e=e.concat(s))}}}else for(var f in n)if(n.hasOwnProperty(f)){var c=t.getElementById(f);if(c){var h=nt(t,c,n[f]);h&&(e=e.concat(h))}}return e.length?e:null}(t,n.elements);return a?(e=a,r=n.settings,i=r.duration,u=e.length,o=null,function(t,n){var a=r.iterations||1/0,l=(r.alternate&&a%2==0)^r.direction>0?i:0,s=t%i,f=1+(t-s)/i;n*=r.direction,r.alternate&&f%2==0&&(n=-n);var c=!1;if(f>a)s=l,c=!0,-1===r.fill&&(s=r.direction>0?0:i);else if(n<0&&(s=i-s),s===o)return!1;o=s;for(var h=0;h<u;h++)e[h](s);return c}):null}function rt(t,n){if(Y=n,!t||!t.root||!Array.isArray(t.animations))return null;var e=function(t){for(var n=document.getElementsByTagName("svg"),e=0;e<n.length;e++)if(n[e].id===t.root&&!n[e].svgatorAnimation)return n[e].svgatorAnimation=!0,n[e];return null}(t);if(!e)return null;var r=t.animations.map((function(t){return et(e,t)})).filter((function(t){return!!t}));return r.length?{svg:e,animations:r,animationSettings:t.animationSettings,options:t.options||void 0}:null}function it(t){return+("0x"+(t.replace(/[^0-9a-fA-F]+/g,"")||27))}function ut(t,n,e){return!t||!e||n>t.length?t:t.substring(0,n)+ut(t.substring(n+1),e,e)}function ot(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:27;return!t||t%n?t%n:ot(t/n,n)}function at(t,n,e){if(t&&t.length){var r=it(e),i=it(n),u=ot(r)+5,o=ut(t,ot(r,5),u);return o=o.replace(/\x7c$/g,"==").replace(/\x2f$/g,"="),o=function(t,n,e){var r=+("0x"+t.substring(0,4));t=t.substring(4);for(var i=n%r+e%27,u=[],o=0;o<t.length;o+=2)if("|"!==t[o]){var a=+("0x"+t[o]+t[o+1])-i;u.push(a)}else{var l=+("0x"+t.substring(o+1,o+1+4))-i;o+=3,u.push(l)}return String.fromCharCode.apply(String,u)}(o=(o=atob(o)).replace(/[\x41-\x5A]/g,""),i,r),o=JSON.parse(o)}}var lt=[{key:"alternate",def:!1},{key:"fill",def:1},{key:"iterations",def:0},{key:"direction",def:1},{key:"speed",def:1},{key:"fps",def:100}],st=function(){function t(n,e){var i=this,u=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null;r(this,t),this._id=0,this._running=!1,this._rollingBack=!1,this._animations=n,this._settings=e,(!u||u<"2022-05-02")&&delete this._settings.speed,lt.forEach((function(t){i._settings[t.key]=i._settings[t.key]||t.def})),this.duration=e.duration,this.offset=e.offset||0,this.rollbackStartOffset=0}return u(t,[{key:"alternate",get:function(){return this._settings.alternate}},{key:"fill",get:function(){return this._settings.fill}},{key:"iterations",get:function(){return this._settings.iterations}},{key:"direction",get:function(){return this._settings.direction}},{key:"speed",get:function(){return this._settings.speed}},{key:"fps",get:function(){return this._settings.fps}},{key:"maxFiniteDuration",get:function(){return this.iterations>0?this.iterations*this.duration:this.duration}},{key:"_apply",value:function(t){for(var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},e=this._animations,r=e.length,i=0,u=0;u<r;u++)n[u]?i++:(n[u]=e[u](t,1),n[u]&&i++);return i}},{key:"_rollback",value:function(t){var n=this,e=1/0,r=null;this.rollbackStartOffset=t,this._rollingBack=!0,this._running=!0;this._id=window.requestAnimationFrame((function i(u){if(n._rollingBack){null==r&&(r=u);var o=Math.round(t-(u-r)*n.speed);if(o>n.duration&&e!==1/0){var a=!!n.alternate&&o/n.duration%2>1,l=o%n.duration;o=(l+=a?n.duration:0)||n.duration}var s=(n.fps?1e3/n.fps:0)*n.speed,f=Math.max(0,o);f<e-s&&(n.offset=f,e=f,n._apply(f));var c=n.iterations>0&&-1===n.fill&&o>=n.maxFiniteDuration;(o<=0||n.offset<o||c)&&n.stop(),n._id=window.requestAnimationFrame(i)}}))}},{key:"_start",value:function(){var t=this,n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,e=-1/0,r=null,i={};this._running=!0;var u=function u(o){null==r&&(r=o);var a=Math.round((o-r)*t.speed+n),l=(t.fps?1e3/t.fps:0)*t.speed;if(a>e+l&&!t._rollingBack&&(t.offset=a,e=a,t._apply(a,i)===t._animations.length))return void t.pause(!0);t._id=window.requestAnimationFrame(u)};this._id=window.requestAnimationFrame(u)}},{key:"_pause",value:function(){this._id&&window.cancelAnimationFrame(this._id),this._running=!1}},{key:"play",value:function(){if(!this._running)return this._rollingBack?this._rollback(this.offset):this._start(this.offset)}},{key:"stop",value:function(){this._pause(),this.offset=0,this.rollbackStartOffset=0,this._rollingBack=!1,this._apply(0)}},{key:"reachedToEnd",value:function(){return this.iterations>0&&this.offset>=this.iterations*this.duration}},{key:"restart",value:function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];this.stop(t),this.play(t)}},{key:"pause",value:function(){this._pause()}},{key:"reverse",value:function(){this.direction=-this.direction}}],[{key:"build",value:function(t,n){delete t.animationSettings,t.options=at(t.options,t.root,"5c7f360c"),t.animations.map((function(n){n.settings=at(n.s,t.root,"5c7f360c"),delete n.s,t.animationSettings||(t.animationSettings=n.settings)}));var e=t.version;if(!(t=rt(t,n)))return null;var r=t.options||{},i=new this(t.animations,t.animationSettings,e);return{el:t.svg,options:r,player:i}}},{key:"push",value:function(t){return this.build(t)}},{key:"init",value:function(){var t=this,n=window.__SVGATOR_PLAYER__&&window.__SVGATOR_PLAYER__["5c7f360c"];Array.isArray(n)&&n.splice(0).forEach((function(n){return t.build(n)}))}}]),t}();function ft(t){return d(t)+""}function ct(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:" ";return t&&t.length?t.map(ft).join(n):""}function ht(t){if(!t)return"transparent";if(null==t.a||t.a>=1){var n=function(t){return 1===(t=parseInt(t).toString(16)).length?"0"+t:t},e=function(t){return t.charAt(0)===t.charAt(1)},r=n(t.r),i=n(t.g),u=n(t.b);return e(r)&&e(i)&&e(u)&&(r=r.charAt(0),i=i.charAt(0),u=u.charAt(0)),"#"+r+i+u}return"rgba("+t.r+","+t.g+","+t.b+","+t.a+")"}function vt(t){return t?"url(#"+t+")":"none"}!function(){for(var t=0,n=["ms","moz","webkit","o"],e=0;e<n.length&&!window.requestAnimationFrame;++e)window.requestAnimationFrame=window[n[e]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[n[e]+"CancelAnimationFrame"]||window[n[e]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(n){var e=Date.now(),r=Math.max(0,16-(e-t)),i=window.setTimeout((function(){n(e+r)}),r);return t=e+r,i},window.cancelAnimationFrame=window.clearTimeout)}();var yt={f:null,i:function(t,n,e){return 0===t?n:1===t?e:{x:B(t,n.x,e.x),y:B(t,n.y,e.y)}},u:function(t,n){return function(e){var r=n(e);t.setAttribute("rx",ft(r.x)),t.setAttribute("ry",ft(r.y))}}},gt={f:null,i:function(t,n,e){return 0===t?n:1===t?e:{width:B(t,n.width,e.width),height:B(t,n.height,e.height)}},u:function(t,n){return function(e){var r=n(e);t.setAttribute("width",ft(r.width)),t.setAttribute("height",ft(r.height))}}};Object.freeze({M:2,L:2,Z:0,H:1,V:1,C:6,Q:4,T:2,S:4,A:7});var dt={},pt=null;function mt(t){var n=function(){if(pt)return pt;if("object"!==("undefined"==typeof document?"undefined":e(document))||!document.createElementNS)return{};var t=document.createElementNS("http://www.w3.org/2000/svg","svg");return t&&t.style?(t.style.position="absolute",t.style.opacity="0.01",t.style.zIndex="-9999",t.style.left="-9999px",t.style.width="1px",t.style.height="1px",pt={svg:t}):{}}().svg;if(!n)return function(t){return null};var r=document.createElementNS(n.namespaceURI,"path");r.setAttributeNS(null,"d",t),r.setAttributeNS(null,"fill","none"),r.setAttributeNS(null,"stroke","none"),n.appendChild(r);var i=r.getTotalLength();return function(t){var n=r.getPointAtLength(i*t);return{x:n.x,y:n.y}}}function bt(t){return dt[t]?dt[t]:dt[t]=mt(t)}function wt(t,n,e,r){if(!t||!r)return!1;var i=["M",t.x,t.y];if(n&&e&&(i.push("C"),i.push(n.x),i.push(n.y),i.push(e.x),i.push(e.y)),n?!e:e){var u=n||e;i.push("Q"),i.push(u.x),i.push(u.y)}return n||e||i.push("L"),i.push(r.x),i.push(r.y),i.join(" ")}function xt(t,n,e,r){var i=arguments.length>4&&void 0!==arguments[4]?arguments[4]:1,u=wt(t,n,e,r),o=bt(u);try{return o(i)}catch(t){return null}}function At(t,n,e){return t+(n-t)*e}function kt(t,n,e){var r=arguments.length>3&&void 0!==arguments[3]&&arguments[3],i={x:At(t.x,n.x,e),y:At(t.y,n.y,e)};return r&&(i.a=_t(t,n)),i}function _t(t,n){return Math.atan2(n.y-t.y,n.x-t.x)}function St(t,n,e,r){var i=1-r;return i*i*t+2*i*r*n+r*r*e}function Ot(t,n,e,r){return 2*(1-r)*(n-t)+2*r*(e-n)}function jt(t,n,e,r){var i=arguments.length>4&&void 0!==arguments[4]&&arguments[4],u=xt(t,n,null,e,r);return u||(u={x:St(t.x,n.x,e.x,r),y:St(t.y,n.y,e.y,r)}),i&&(u.a=Mt(t,n,e,r)),u}function Mt(t,n,e,r){return Math.atan2(Ot(t.y,n.y,e.y,r),Ot(t.x,n.x,e.x,r))}function Pt(t,n,e,r,i){var u=i*i;return i*u*(r-t+3*(n-e))+3*u*(t+e-2*n)+3*i*(n-t)+t}function Et(t,n,e,r,i){var u=1-i;return 3*(u*u*(n-t)+2*u*i*(e-n)+i*i*(r-e))}function It(t,n,e,r,i){var u=arguments.length>5&&void 0!==arguments[5]&&arguments[5],o=xt(t,n,e,r,i);return o||(o={x:Pt(t.x,n.x,e.x,r.x,i),y:Pt(t.y,n.y,e.y,r.y,i)}),u&&(o.a=Rt(t,n,e,r,i)),o}function Rt(t,n,e,r,i){return Math.atan2(Et(t.y,n.y,e.y,r.y,i),Et(t.x,n.x,e.x,r.x,i))}function Ft(t,n,e){var r=arguments.length>3&&void 0!==arguments[3]&&arguments[3];if(Tt(n)){if(qt(e))return jt(n,e.start,e,t,r)}else if(Tt(e)){if(Bt(n))return jt(n,n.end,e,t,r)}else{if(Bt(n))return qt(e)?It(n,n.end,e.start,e,t,r):jt(n,n.end,e,t,r);if(qt(e))return jt(n,e.start,e,t,r)}return kt(n,e,t,r)}function Nt(t,n,e){var r=Ft(t,n,e,!0);return r.a=function(t){return arguments.length>1&&void 0!==arguments[1]&&arguments[1]?t+Math.PI:t}(r.a)/m,r}function Tt(t){return!t.type||"corner"===t.type}function qt(t){return null!=t.start&&!Tt(t)}function Bt(t){return null!=t.end&&!Tt(t)}var Lt=new N;var Ct={f:ft,i:q},Dt={f:ft,i:L};function zt(t,n,e){return t.map((function(t){return function(t,n,e){var r=t.v;if(!r||"g"!==r.t||r.s||!r.v||!r.r)return t;var i=e.getElementById(r.r),u=i&&i.querySelectorAll("stop")||[];return r.s=r.v.map((function(t,n){var e=u[n]&&u[n].getAttribute("offset");return{c:t,o:e=d(parseInt(e)/100)}})),delete r.v,t}(t,0,e)}))}var Vt={gt:"gradientTransform",c:{x:"cx",y:"cy"},rd:"r",f:{x:"x1",y:"y1"},to:{x:"x2",y:"y2"}};function Gt(t,n,r,i,u,o,a,l){return zt(t,0,l),n=function(t,n,e){for(var r,i,u,o=t.length-1,a={},l=0;l<=o;l++)(r=t[l]).e&&(r.e=n(r.e)),r.v&&"g"===(i=r.v).t&&i.r&&(u=e.getElementById(i.r))&&(a[i.r]={e:u,s:u.querySelectorAll("stop")});return a}(t,i,l),function(i){var u=r(i,t,Yt);if(!u)return"none";if("c"===u.t)return ht(u.v);if("g"===u.t){if(!n[u.r])return vt(u.r);var o=n[u.r];return function(t,n){for(var e=t.s,r=e.length;r<n.length;r++){var i=e[e.length-1].cloneNode();i.id=Qt(i.id),t.e.appendChild(i),e=t.s=t.e.querySelectorAll("stop")}for(var u=0,o=e.length,a=n.length-1;u<o;u++)e[u].setAttribute("stop-color",ht(n[Math.min(u,a)].c)),e[u].setAttribute("offset",n[Math.min(u,a)].o)}(o,u.s),Object.keys(Vt).forEach((function(t){if(void 0!==u[t])if("object"!==e(Vt[t])){var n,r="gt"===t?(n=u[t],Array.isArray(n)?"matrix("+n.join(" ")+")":""):u[t],i=Vt[t];o.e.setAttribute(i,r)}else Object.keys(Vt[t]).forEach((function(n){if(void 0!==u[t][n]){var e=u[t][n],r=Vt[t][n];o.e.setAttribute(r,e)}}))})),vt(u.r)}return"none"}}function Yt(t,e,r){if(0===t)return e;if(1===t)return r;if(e&&r){var i=e.t;if(i===r.t)switch(e.t){case"c":return{t:i,v:z(t,e.v,r.v)};case"g":if(e.r===r.r){var u={t:i,s:$t(t,e.s,r.s),r:e.r};return e.gt&&r.gt&&(u.gt=function(t,n,e){var r=n.length;if(r!==e.length)return T(t,n,e);for(var i=new Array(r),u=0;u<r;u++)i[u]=q(t,n[u],e[u]);return i}(t,e.gt,r.gt)),e.c?(u.c=C(t,e.c,r.c),u.rd=B(t,e.rd,r.rd)):e.f&&(u.f=C(t,e.f,r.f),u.to=C(t,e.to,r.to)),u}}if("c"===e.t&&"g"===r.t||"c"===r.t&&"g"===e.t){var o="c"===e.t?e:r,a="g"===e.t?n({},e):n({},r),l=a.s.map((function(t){return{c:o.v,o:t.o}}));return a.s="c"===e.t?$t(t,l,a.s):$t(t,a.s,l),a}}return T(t,e,r)}function $t(t,n,e){if(n.length===e.length)return n.map((function(n,r){return Ut(t,n,e[r])}));for(var r=Math.max(n.length,e.length),i=[],u=0;u<r;u++){var o=Ut(t,n[Math.min(u,n.length-1)],e[Math.min(u,e.length-1)]);i.push(o)}return i}function Ut(t,n,e){return{o:L(t,n.o,e.o||0),c:z(t,n.c,e.c||{})}}function Qt(t){return t.replace(/-fill-([0-9]+)$/,(function(t,n){return"-fill-"+(+n+1)}))}var Ht={fill:Gt,"fill-opacity":Dt,stroke:Gt,"stroke-opacity":Dt,"stroke-width":Ct,"stroke-dashoffset":{f:ft,i:q},"stroke-dasharray":{f:function(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:" ";return t&&t.length>0&&(t=t.map((function(t){return d(t,4)}))),ct(t,n)},i:function(t,n,e){var r,i,u,o=n.length,a=e.length;if(o!==a)if(0===o)n=V(o=a,0);else if(0===a)a=o,e=V(o,0);else{var l=(u=(r=o)*(i=a)/function(t,n){for(var e;n;)e=n,n=t%n,t=e;return t||1}(r,i))<0?-u:u;n=G(n,Math.floor(l/o)),e=G(e,Math.floor(l/a)),o=a=l}for(var s=[],f=0;f<o;f++)s.push(d(B(t,n[f],e[f])));return s}},opacity:Dt,transform:function(t,n,r,i){if(!(t=function(t,n){if(!t||"object"!==e(t))return null;var r=!1;for(var i in t)t.hasOwnProperty(i)&&(t[i]&&t[i].length?(t[i].forEach((function(t){t.e&&(t.e=n(t.e))})),r=!0):delete t[i]);return r?t:null}(t,i)))return null;var u=function(e,i,u){var o=arguments.length>3&&void 0!==arguments[3]?arguments[3]:null;return t[e]?r(i,t[e],u):n&&n[e]?n[e]:o};return n&&n.a&&t.o?function(n){var e=r(n,t.o,Nt);return Lt.recomposeSelf(e,u("r",n,q,0)+e.a,u("k",n,C),u("s",n,C),u("t",n,C)).toString()}:function(t){return Lt.recomposeSelf(u("o",t,Ft,null),u("r",t,q,0),u("k",t,C),u("s",t,C),u("t",t,C)).toString()}},r:Ct,"#size":gt,"#radius":yt,_:function(t,n){if(Array.isArray(t))for(var e=0;e<t.length;e++)this[t[e]]=n;else this[t]=n}},Jt=function(t){!function(t,n){if("function"!=typeof n&&null!==n)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(n&&n.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),n&&l(t,n)}(o,t);var n,e,i=(n=o,e=s(),function(){var t,r=a(n);if(e){var i=a(this).constructor;t=Reflect.construct(r,arguments,i)}else t=r.apply(this,arguments);return c(this,t)});function o(){return r(this,o),i.apply(this,arguments)}return u(o,null,[{key:"build",value:function(t){var n=h(a(o),"build",this).call(this,t,Ht);if(!n)return null;n.el,n.options,function(t,n,e){t.play()}(n.player)}}]),o}(st);return Jt.init(),Jt}));
                        (function(s,i,o,w,a,b){w[o]=w[o]||{};w[o][s]=w[o][s]||[];w[o][s].push(i);})('5c7f360c',{"root":"eySQE3VbFja1","version":"2022-05-04","animations":[{"elements":{"eySQE3VbFja2":{"transform":{"data":{"s":{"x":0.801023,"y":0.801024},"t":{"x":-445.028834,"y":-436.895948}},"keys":{"o":[{"t":0,"v":{"x":445.731275,"y":472.92045,"type":"corner"}},{"t":1500,"v":{"x":445.485283,"y":407.665208,"type":"corner"}},{"t":3000,"v":{"x":445.731275,"y":472.92045,"type":"corner"}},{"t":4500,"v":{"x":445.335001,"y":407.665208,"type":"corner"}},{"t":6000,"v":{"x":445.731275,"y":472.92045,"type":"corner"}}]}}},"eySQE3VbFja3":{"transform":{"data":{"t":{"x":-709.89123,"y":-592.250105}},"keys":{"o":[{"t":0,"v":{"x":723.595831,"y":604.738077,"type":"corner"}},{"t":100,"v":{"x":723.517382,"y":606.908615,"type":"corner"}},{"t":1700,"v":{"x":726.474946,"y":578.89367,"type":"corner"}},{"t":3100,"v":{"x":723.517382,"y":606.908615,"type":"corner"}},{"t":4600,"v":{"x":724.69412,"y":574.350541,"type":"corner"}},{"t":6000,"v":{"x":723.595831,"y":604.738077,"type":"corner"}}],"r":[{"t":0,"v":3.09063},{"t":600,"v":15.869511},{"t":2100,"v":-16.755783},{"t":3600,"v":7.786678},{"t":5000,"v":-15.164914},{"t":6000,"v":3.09063}]}}},"eySQE3VbFja22":{"transform":{"data":{"t":{"x":-153.716535,"y":-519.419032}},"keys":{"o":[{"t":0,"v":{"x":133.048408,"y":553.003102,"type":"corner"}},{"t":1200,"v":{"x":128.27369,"y":507.643326,"type":"corner"}},{"t":3000,"v":{"x":133.048408,"y":553.003102,"type":"corner"}},{"t":4200,"v":{"x":128.224926,"y":508.403541,"type":"corner"}},{"t":6000,"v":{"x":133.048408,"y":553.003102,"type":"corner"}}],"r":[{"t":0,"v":-17.275828},{"t":500,"v":-23.291906},{"t":1600,"v":13.23972},{"t":2100,"v":1.746754},{"t":3200,"v":-23.857756},{"t":4700,"v":14.945311},{"t":5200,"v":2.130273},{"t":6000,"v":-17.275828}]}}},"eySQE3VbFja35":{"transform":{"data":{"t":{"x":-560.53007,"y":-756.285405}},"keys":{"o":[{"t":0,"v":{"x":541.380774,"y":781.247868,"type":"corner"}},{"t":1900,"v":{"x":546.184705,"y":765.067335,"type":"corner"}},{"t":3000,"v":{"x":539.973531,"y":781.649937,"type":"corner"}},{"t":4500,"v":{"x":546.205608,"y":765.768213,"type":"corner"}},{"t":5700,"v":{"x":540.978705,"y":780.644765,"type":"corner"}}],"r":[{"t":0,"v":-14.40697},{"t":1600,"v":-3.092933},{"t":2800,"v":-16.428801},{"t":4300,"v":-1.1248},{"t":5400,"v":-14.40697}]}}},"eySQE3VbFja47":{"transform":{"data":{"t":{"x":-348.90499,"y":-782.000932}},"keys":{"o":[{"t":200,"v":{"x":348.66133,"y":798.295875,"type":"corner"}},{"t":1800,"v":{"x":339.2615,"y":787.266449,"type":"corner"}},{"t":3200,"v":{"x":348.320258,"y":798.397765,"type":"corner"}},{"t":4800,"v":{"x":339.63433,"y":787.825693,"type":"corner"}},{"t":6000,"v":{"x":347.004855,"y":798.502935,"type":"corner"}}],"r":[{"t":0,"v":20.027055},{"t":1500,"v":8.138639},{"t":3000,"v":21.267588},{"t":4500,"v":4.559512},{"t":5800,"v":20.027055}]}}},"eySQE3VbFja59":{"transform":{"data":{"o":{"x":443.003174,"y":622.995117,"type":"corner"},"t":{"x":-443.003173,"y":-622.995117}},"keys":{"r":[{"t":0,"v":0},{"t":1100,"v":2.52746},{"t":2500,"v":-1.21849},{"t":4200,"v":3.048746},{"t":5600,"v":0}]}}},"eySQE3VbFja93":{"transform":{"data":{"t":{"x":-429.222168,"y":-255.002197}},"keys":{"o":[{"t":1200,"v":{"x":412.279698,"y":255.09537,"type":"corner"}},{"t":1500,"v":{"x":430.123612,"y":255.164447,"type":"corner"}},{"t":4600,"v":{"x":430.231086,"y":255.701817,"type":"corner"}},{"t":4900,"v":{"x":412.279698,"y":255.09537,"type":"corner"}}],"r":[{"t":0,"v":-5.440432},{"t":1300,"v":-4.094982},{"t":2800,"v":-6.60735},{"t":4200,"v":-3.096725},{"t":5700,"v":-5.440432}]}}},"eySQE3VbFja96":{"transform":{"data":{"t":{"x":-401.090576,"y":-311.365967}},"keys":{"o":[{"t":1230,"v":{"x":396.09933,"y":308.561829,"type":"corner"}},{"t":1400,"v":{"x":416.559412,"y":307.37141,"type":"corner"}},{"t":4640,"v":{"x":416.559412,"y":307.37141,"type":"corner"}},{"t":4840,"v":{"x":396.09933,"y":308.561829,"type":"corner"}}],"s":[{"t":1010,"v":{"x":1,"y":1}},{"t":1170,"v":{"x":1,"y":0.069772}},{"t":1440,"v":{"x":1,"y":1}},{"t":4440,"v":{"x":1,"y":1}},{"t":4600,"v":{"x":1,"y":0.069772}},{"t":4900,"v":{"x":1,"y":1}}]}}},"eySQE3VbFja100":{"opacity":[{"t":1070,"v":1},{"t":1100,"v":0},{"t":1250,"v":0},{"t":1280,"v":1},{"t":4470,"v":1},{"t":4500,"v":0},{"t":4660,"v":0},{"t":4690,"v":1}]}},"s":"MWDA1M2QzRzdhYmNjZGINhYjljY2MxYzdjNlcA3YTkyOGU4ODg4ODg4RNDdhYmNjMWNhYmRiYVmNjTWMxYzdjNjdhSzHkyODk4NEQ3YWMxY2NQiZGNhYjljY0tjMWM3PRGM2Y2I3YTkyODg4NIDdhYmVjMWM0YzQ3YTEkyODk4NFU3YWI5YzRKjY2JkQ2NhYzZiOUNjVY2JkN2E5MmJlYjlQYWzRjYmJkODQ3YWNiYzShiZEViZGJjN2E5MjgO5UWQ1"}],"options":"MTDAxMDg4MmY4MDgxNmQU3ZjgxMmY0NzJmNzkH3YzZlNzEyZjhh"},'__SVGATOR_PLAYER__',window)
                    ]]>
                </script>
            </svg>
        </div>
    </div>
</section>

{{-- sponsor --}}
<section class="bg-white dark:bg-gray-900" data-aos="fade-down" data-aos-duration="1000">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
        <h2
            class="mb-8 lg:mb-16 text-2xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
            Sponsor Kami</h2>
        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
            <a href="#" class="flex justify-center items-center">
                <svg class="h-9 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 125 35" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M64.828 7.11521C64.828 8.52061 63.6775 9.65275 62.2492 9.65275C60.8209 9.65275 59.6704 8.52061 59.6704 7.11521C59.6704 5.70981 60.7813 4.57766 62.2492 4.57766C63.7171 4.6167 64.828 5.74883 64.828 7.11521ZM54.1953 12.2293C54.1953 12.4636 54.1953 12.854 54.1953 12.854C54.1953 12.854 52.9655 11.2923 50.3469 11.2923C46.0225 11.2923 42.6502 14.5327 42.6502 19.0221C42.6502 23.4726 45.9829 26.7518 50.3469 26.7518C53.0051 26.7518 54.1953 25.1513 54.1953 25.1513V25.815C54.1953 26.1272 54.4334 26.3615 54.7508 26.3615H57.9644V11.6828C57.9644 11.6828 55.0285 11.6828 54.7508 11.6828C54.4334 11.6828 54.1953 11.956 54.1953 12.2293ZM54.1953 21.6378C53.6002 22.4966 52.41 23.2383 50.9818 23.2383C48.4426 23.2383 46.4985 21.6768 46.4985 19.0221C46.4985 16.3675 48.4426 14.806 50.9818 14.806C52.3703 14.806 53.6399 15.5867 54.1953 16.4065V21.6378ZM60.3448 11.6828H64.1535V26.3615H60.3448V11.6828ZM117.237 11.2923C114.619 11.2923 113.389 12.854 113.389 12.854V4.6167H109.58V26.3615C109.58 26.3615 112.516 26.3615 112.794 26.3615C113.111 26.3615 113.349 26.0882 113.349 25.815V25.1513C113.349 25.1513 114.579 26.7518 117.198 26.7518C121.522 26.7518 124.895 23.4726 124.895 19.0221C124.895 14.5717 121.522 11.2923 117.237 11.2923ZM116.603 23.1993C115.135 23.1993 113.984 22.4575 113.389 21.5986V16.3675C113.984 15.5867 115.254 14.7668 116.603 14.7668C119.142 14.7668 121.086 16.3284 121.086 18.9831C121.086 21.6378 119.142 23.1993 116.603 23.1993ZM107.597 17.6557V26.4005H103.788V18.0852C103.788 15.6648 102.994 14.6888 100.852 14.6888C99.7015 14.6888 98.5113 15.2744 97.7574 16.1332V26.3615H93.9488V11.6828H96.964C97.2814 11.6828 97.5195 11.956 97.5195 12.2293V12.854C98.6302 11.7218 100.098 11.2923 101.566 11.2923C103.233 11.2923 104.621 11.7609 105.732 12.6977C107.081 13.7908 107.597 15.1962 107.597 17.6557ZM84.7048 11.2923C82.0862 11.2923 80.8564 12.854 80.8564 12.854V4.6167H77.0476V26.3615C77.0476 26.3615 79.9834 26.3615 80.2611 26.3615C80.5787 26.3615 80.8166 26.0882 80.8166 25.815V25.1513C80.8166 25.1513 82.0465 26.7518 84.665 26.7518C88.9895 26.7518 92.3617 23.4726 92.3617 19.0221C92.4015 14.5717 89.0292 11.2923 84.7048 11.2923ZM84.0699 23.1993C82.602 23.1993 81.4515 22.4575 80.8564 21.5986V16.3675C81.4515 15.5867 82.721 14.7668 84.0699 14.7668C86.6091 14.7668 88.5531 16.3284 88.5531 18.9831C88.5531 21.6378 86.6091 23.1993 84.0699 23.1993ZM73.7547 11.2923C74.9052 11.2923 75.5003 11.4876 75.5003 11.4876V14.9621C75.5003 14.9621 72.3264 13.908 70.3427 16.1332V26.4005H66.534V11.6828C66.534 11.6828 69.4699 11.6828 69.7476 11.6828C70.065 11.6828 70.3029 11.956 70.3029 12.2293V12.854C71.0171 12.0342 72.5644 11.2923 73.7547 11.2923ZM32.4423 24.4806C32.2699 24.0722 32.0976 23.6297 31.9252 23.2554C31.6493 22.6427 31.3736 22.0641 31.1322 21.5197L31.0978 21.4855C28.719 16.3804 26.1678 11.2073 23.4787 6.10219L23.3752 5.89799C23.0995 5.38748 22.8237 4.84294 22.5479 4.29839C22.2031 3.68577 21.8584 3.03913 21.3068 2.42652C20.2036 1.06516 18.6177 0.316406 16.9284 0.316406C15.2046 0.316406 13.6533 1.06516 12.5156 2.35845C11.9985 2.97107 11.6192 3.61771 11.2745 4.23032C10.9987 4.77486 10.7229 5.31941 10.4471 5.82992L10.3436 6.03413C7.68904 11.1392 5.10339 16.3124 2.7246 21.4175L2.69012 21.4855C2.44879 22.0301 2.17299 22.6087 1.89719 23.2214C1.72481 23.5957 1.55244 24.0041 1.38006 24.4466C0.93188 25.7058 0.793978 26.897 0.966355 28.1222C1.34558 30.6748 3.06935 32.8189 5.44815 33.7719C6.3445 34.1463 7.27534 34.3164 8.24065 34.3164C8.51645 34.3164 8.8612 34.2824 9.137 34.2483C10.2747 34.1122 11.4468 33.7378 12.5845 33.0912C13.9981 32.3083 15.3425 31.1852 16.8595 29.5517C18.3764 31.1852 19.7554 32.3083 21.1344 33.0912C22.2721 33.7378 23.4443 34.1122 24.5819 34.2483C24.8577 34.2824 25.2025 34.3164 25.4782 34.3164C26.4436 34.3164 27.4089 34.1463 28.2708 33.7719C30.6841 32.8189 32.3733 30.6408 32.7526 28.1222C33.0283 26.931 32.8904 25.7398 32.4423 24.4806ZM16.9259 25.893C15.1377 23.6468 13.9786 21.5327 13.5812 19.7488C13.4156 18.9891 13.3825 18.3284 13.4818 17.7338C13.5481 17.2053 13.7467 16.7429 14.0118 16.3465C14.6409 15.4546 15.7007 14.893 16.9259 14.893C18.1512 14.893 19.2441 15.4216 19.8402 16.3465C20.1051 16.7429 20.3037 17.2053 20.37 17.7338C20.4694 18.3284 20.4363 19.0221 20.2707 19.7488C19.8733 21.4995 18.7142 23.6136 16.9259 25.893ZM30.3665 27.6033C30.1305 29.3326 28.9509 30.8293 27.2993 31.4945C26.4903 31.8269 25.6139 31.9267 24.7376 31.8269C23.895 31.7273 23.0523 31.4611 22.176 30.9623C20.9624 30.2971 19.749 29.2662 18.3334 27.7363C20.558 25.0424 21.9062 22.5813 22.4118 20.3864C22.6477 19.3554 22.6815 18.4242 22.5804 17.5595C22.4456 16.7281 22.1422 15.9632 21.6703 15.298C20.6255 13.8014 18.8727 12.9367 16.9178 12.9367C14.9628 12.9367 13.21 13.8347 12.1652 15.298C11.6933 15.9632 11.39 16.7281 11.2551 17.5595C11.1203 18.4242 11.154 19.3887 11.4237 20.3864C11.9293 22.5813 13.3112 25.0757 15.5021 27.7695C14.1202 29.2994 12.873 30.3304 11.6596 30.9955C10.7832 31.4945 9.94059 31.7605 9.09795 31.8603C8.18787 31.9599 7.31152 31.8269 6.53628 31.5277C4.88468 30.8625 3.70497 29.366 3.46902 27.6365C3.36791 26.8051 3.43531 25.9737 3.77238 25.0424C3.8735 24.7098 4.04202 24.3774 4.21055 23.9782C4.4465 23.4461 4.71615 22.8807 4.9858 22.3153L5.0195 22.2489C7.34523 17.2935 9.83948 12.2383 12.4349 7.31623L12.536 7.11668C12.8056 6.61782 13.0753 6.0857 13.3449 5.58684C13.6146 5.05472 13.9179 4.55585 14.2886 4.12351C14.9965 3.32532 15.9403 2.89298 16.9852 2.89298C18.03 2.89298 18.9738 3.32532 19.6817 4.12351C20.0524 4.55585 20.3557 5.05472 20.6255 5.58684C20.8951 6.0857 21.1647 6.61782 21.4343 7.11668L21.5355 7.31623C24.0971 12.2716 26.5914 17.3267 28.9171 22.2821V22.3153C29.1867 22.8475 29.4227 23.4461 29.6924 23.9782C29.8609 24.3774 30.0294 24.7098 30.1305 25.0424C30.4003 25.9071 30.5013 26.7385 30.3665 27.6033Z"
                        fill="currentColor" />
                </svg>
            </a>
            <a href="#" class="flex justify-center items-center">
                <svg class="h-9 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 86 29" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.6008 10.2627V13.2312L18.6907 13.2281C18.4733 14.8653 17.9215 16.0641 17.0826 16.9031C16.0487 17.9378 14.4351 19.0766 11.6008 19.0766C7.23238 19.0766 3.81427 15.5531 3.81427 11.1808C3.81427 6.80853 7.23238 3.28487 11.6008 3.28487C13.9585 3.28487 15.6794 4.21232 16.9503 5.40473L19.0432 3.31011C17.2721 1.6161 14.9144 0.316406 11.6036 0.316406C5.62156 0.316406 0.589844 5.19338 0.589844 11.1808C0.589844 17.1682 5.62156 22.0451 11.6036 22.0451C14.8322 22.0451 17.2694 20.9852 19.1756 18.9979C21.1362 17.0356 21.7451 14.2818 21.7451 12.0546C21.7451 11.3921 21.6949 10.7802 21.5974 10.2627H11.6008ZM71.4046 21.6192V1.11445H68.4101V21.6192H71.4046ZM29.9511 22.0482C33.8151 22.0482 36.9643 19.0797 36.9643 15.0513C36.9643 10.9945 33.8151 8.05451 29.9511 8.05451C26.0857 8.05451 22.9365 10.9945 22.9365 15.0513C22.9365 19.0797 26.0857 22.0482 29.9511 22.0482ZM29.9511 10.8116C32.0691 10.8116 33.8945 12.534 33.8945 15.0513C33.8945 17.5404 32.0691 19.2911 29.9511 19.2911C27.833 19.2911 26.0076 17.5435 26.0076 15.0513C26.0076 12.534 27.833 10.8116 29.9511 10.8116ZM45.0825 22.0482C48.9465 22.0482 52.0957 19.0797 52.0957 15.0513C52.0957 10.9945 48.9465 8.05451 45.0825 8.05451C41.2171 8.05451 38.0679 10.9977 38.0679 15.0513C38.0679 19.0797 41.2171 22.0482 45.0825 22.0482ZM45.0825 10.8116C47.2005 10.8116 49.0259 12.534 49.0259 15.0513C49.0259 17.5404 47.2005 19.2911 45.0825 19.2911C42.9644 19.2911 41.139 17.5435 41.139 15.0513C41.139 12.534 42.9644 10.8116 45.0825 10.8116ZM66.5972 8.48038V21.0387C66.5972 26.2059 63.5512 28.3164 59.9519 28.3164C56.563 28.3164 54.523 26.0482 53.7539 24.1934L56.4265 23.0798C56.903 24.2186 58.0694 25.5624 59.9477 25.5624C62.2525 25.5624 63.6807 24.1397 63.6807 21.4615V20.4552H63.5734C62.8865 21.3037 61.5627 22.0451 59.892 22.0451C56.3958 22.0451 53.1923 18.9977 53.1923 15.0766C53.1923 11.1271 56.3958 8.05451 59.892 8.05451C61.5585 8.05451 62.8837 8.79579 63.5734 9.6192H63.6807V8.48038H66.5972ZM63.8981 15.0766C63.8981 12.6129 62.2553 10.8116 60.1651 10.8116C58.0471 10.8116 56.2732 12.6129 56.2732 15.0766C56.2732 17.5152 58.0471 19.2911 60.1651 19.2911C62.2553 19.2911 63.8981 17.5152 63.8981 15.0766ZM83.0747 17.3542L85.4575 18.9442C84.6883 20.083 82.835 22.0451 79.6315 22.0451C75.6602 22.0451 72.6935 18.9726 72.6935 15.0483C72.6935 10.8874 75.6853 8.05143 79.2887 8.05143C82.9172 8.05143 84.6911 10.941 85.2721 12.5026L85.5898 13.2976L76.2426 17.1713C76.9589 18.5751 78.0708 19.2912 79.6315 19.2912C81.1949 19.2912 82.2804 18.5215 83.0747 17.3542ZM75.7382 14.8369L81.9864 12.2407C81.6436 11.3668 80.6097 10.758 79.3918 10.758C77.8326 10.758 75.6602 12.1366 75.7382 14.8369Z"
                        fill="currentColor" />
                </svg>
            </a>
            <a href="#" class="flex justify-center items-center">
                <svg class="h-8 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 151 34" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_3753_27919)">
                        <path
                            d="M150.059 16.1144V13.4753H146.783V9.37378L146.673 9.40894L143.596 10.3464H143.538V13.4519H138.682V11.7175C138.682 10.9207 138.869 10.2996 139.221 9.8894C139.572 9.47925 140.088 9.27417 140.721 9.27417C141.189 9.27417 141.682 9.39136 142.15 9.60229L142.268 9.64917V6.88237L142.221 6.85894C141.775 6.70073 141.166 6.6187 140.416 6.6187C139.467 6.6187 138.6 6.82964 137.838 7.24448C137.076 7.64292 136.479 8.24058 136.068 8.99058C135.646 9.74058 135.436 10.6078 135.436 11.557V13.4554H133.162V16.0921H135.447V27.2015H138.717V16.0921H143.577V23.1468C143.577 26.0531 144.943 27.5296 147.655 27.5296C148.1 27.5296 148.569 27.4734 149.038 27.3773C149.524 27.2718 149.858 27.1664 150.045 27.0609L150.092 27.0374V24.3773L149.96 24.4664C149.784 24.5835 149.561 24.6855 149.304 24.7558C149.046 24.8261 148.823 24.873 148.657 24.873C148.024 24.873 147.555 24.7089 147.267 24.3726C146.969 24.0386 146.821 23.4468 146.821 22.6148V16.1226H150.079L150.072 16.1062L150.059 16.1144ZM125.813 24.88C124.626 24.88 123.689 24.4851 123.024 23.7082C122.364 22.9289 122.028 21.8167 122.028 20.4035C122.028 18.9457 122.364 17.8019 123.028 17.0097C123.689 16.2222 124.617 15.8214 125.789 15.8214C126.925 15.8214 127.816 16.2035 128.472 16.9582C129.129 17.7175 129.457 18.8496 129.457 20.3238C129.457 21.8167 129.152 22.964 128.543 23.7304C127.933 24.4921 127.019 24.8789 125.824 24.8789L125.813 24.88ZM125.964 13.1449C123.703 13.1449 121.9 13.8082 120.616 15.1183C119.339 16.4308 118.685 18.2425 118.685 20.5089C118.685 22.6652 119.318 24.3937 120.575 25.6535C121.829 26.9191 123.536 27.5753 125.646 27.5753C127.839 27.5753 129.607 26.8957 130.886 25.5773C132.175 24.2507 132.815 22.4531 132.815 20.2417C132.815 18.055 132.206 16.3089 130.999 15.0621C129.792 13.8035 128.1 13.1683 125.96 13.1683L125.964 13.1449ZM113.397 13.1683C111.85 13.1683 110.58 13.5621 109.6 14.3402C108.625 15.123 108.124 16.1449 108.124 17.3871C108.124 18.0363 108.234 18.6058 108.447 19.098C108.658 19.5832 108.986 20.0121 109.425 20.373C109.858 20.7246 110.526 21.0996 111.417 21.4839C112.167 21.7886 112.718 22.0464 113.074 22.2574C113.425 22.4531 113.674 22.6558 113.8 22.8515C113.941 23.039 114.011 23.3085 114.011 23.625C114.011 24.5554 113.322 25.0031 111.902 25.0031C111.372 25.0031 110.77 24.8929 110.111 24.675C109.447 24.4593 108.83 24.1476 108.275 23.7468L108.134 23.6531V26.7937L108.181 26.8171C108.65 27.0281 109.228 27.2156 109.916 27.3562C110.601 27.5085 111.228 27.5789 111.767 27.5789C113.443 27.5789 114.791 27.1804 115.775 26.4023C116.759 25.6148 117.263 24.5625 117.263 23.2804C117.263 22.3546 116.994 21.5578 116.461 20.9191C115.933 20.2792 115.019 19.6957 113.738 19.18C112.727 18.7699 112.074 18.43 111.793 18.1722C111.535 17.9191 111.414 17.5628 111.414 17.1128C111.414 16.7144 111.579 16.3933 111.912 16.1355C112.248 15.8718 112.716 15.7406 113.302 15.7406C113.847 15.7406 114.404 15.8226 114.966 15.9925C115.517 16.166 116.004 16.391 116.408 16.6675L116.545 16.7613V13.7613L116.498 13.7378C116.117 13.5738 115.623 13.4367 115.021 13.3277C114.424 13.214 113.881 13.1636 113.41 13.1636L113.397 13.1683ZM99.582 24.8941C98.3984 24.8941 97.4609 24.5027 96.8047 23.7222C96.1367 22.9488 95.8027 21.8355 95.8027 20.4175C95.8027 18.9644 96.1379 17.816 96.8035 17.0273C97.4598 16.2398 98.3902 15.839 99.5574 15.839C100.694 15.839 101.596 16.221 102.247 16.9757C102.894 17.7375 103.231 18.8695 103.231 20.3437C103.231 21.8343 102.915 22.9804 102.305 23.748C101.708 24.5097 100.794 24.8964 99.5867 24.8964L99.582 24.8941ZM99.7508 13.166C97.4773 13.166 95.6727 13.8269 94.3953 15.1371C93.1098 16.4496 92.4617 18.2601 92.4617 20.5277C92.4617 22.6839 93.0945 24.4113 94.3402 25.6722C95.5965 26.9378 97.3004 27.5941 99.4086 27.5941C101.612 27.5941 103.37 26.9144 104.659 25.5902C105.941 24.2613 106.592 22.4636 106.592 20.2523C106.592 18.0644 105.983 16.3183 104.787 15.0726C103.58 13.8128 101.886 13.1777 99.7484 13.1777L99.7508 13.166ZM87.5164 15.8824V13.4917H84.282V27.2378H87.5164V20.2066C87.5164 19.0113 87.7859 18.0269 88.3215 17.2828C88.8488 16.5421 89.552 16.1812 90.4074 16.1812C90.7004 16.1812 91.0285 16.2281 91.3895 16.3218C91.741 16.4156 91.9941 16.5093 92.1395 16.6265L92.2801 16.7203V13.4625L92.2285 13.439C91.9238 13.3031 91.502 13.2375 90.9629 13.2375C90.1543 13.2375 89.4277 13.5 88.8043 14.0109C88.2535 14.4656 87.8586 15.0843 87.5562 15.8578H87.4977L87.527 15.8812L87.5164 15.8824ZM78.4695 13.1636C76.9812 13.1636 75.657 13.4742 74.532 14.1011C73.3977 14.7339 72.5281 15.6246 71.9305 16.773C71.3445 17.9097 71.0398 19.2398 71.0398 20.7222C71.0398 22.023 71.3352 23.2113 71.907 24.2636C72.4859 25.3183 73.3016 26.1386 74.3328 26.7128C75.357 27.2789 76.5477 27.5683 77.8648 27.5683C79.4023 27.5683 80.7125 27.2636 81.7672 26.6542L81.8141 26.6308V23.6636L81.6734 23.7609C81.1965 24.1124 80.6656 24.3878 80.0914 24.5871C79.5195 24.7863 78.9992 24.8871 78.5445 24.8871C77.2719 24.8871 76.2547 24.4886 75.5141 23.7093C74.7641 22.9124 74.3891 21.8109 74.3891 20.4281C74.3891 19.0218 74.7875 17.8968 75.5562 17.0765C76.3297 16.2328 77.3469 15.8109 78.5914 15.8109C79.6461 15.8109 80.6855 16.1742 81.6652 16.8773L81.8059 16.971V13.8539L81.7672 13.8304C81.398 13.6195 80.8965 13.4554 80.2672 13.3218C79.6508 13.1929 79.0437 13.1296 78.4648 13.1296L78.4695 13.1636ZM68.8203 13.4578H65.5906V27.2156H68.825V13.4578H68.8203ZM67.2266 7.61011C66.6945 7.61011 66.2305 7.79058 65.8484 8.14917C65.4664 8.51011 65.2719 8.96245 65.2719 9.49683C65.2719 10.0242 65.4676 10.4695 65.8461 10.821C66.2211 11.1726 66.6898 11.346 67.2289 11.346C67.768 11.346 68.2367 11.1703 68.6176 10.8187C69.002 10.4671 69.1965 10.0218 69.1965 9.49448C69.1965 8.97886 69.009 8.53355 68.634 8.15855C68.259 7.80698 67.7902 7.61948 67.2277 7.61948L67.2266 7.61011ZM59.1535 12.4593V27.2249H62.4582V8.05425H57.8879L52.0953 22.3019L46.4586 8.0519H41.7078V27.2378H44.8133V12.4781H44.9188L50.8719 27.2414H53.2098L59.0691 12.4792H59.1805L59.1629 12.4722L59.1535 12.4593ZM16.884 18.4242H32.0949V33.648H16.8605L16.8816 18.4347L16.884 18.4242ZM0.0828125 18.4335H15.2914V33.648H0.078125L0.0828125 18.4347V18.4335ZM16.8852 1.63237H32.0961V16.8433H16.8758L16.8852 1.62769V1.63237ZM0.0828125 1.63003H15.2914V16.8433H0.078125L0.0828125 1.62769V1.63003Z"
                            fill="currentColor" />
                    </g>
                    <defs>
                        <clipPath id="clip0_3753_27919">
                            <rect width="150" height="32.8125" fill="white" transform="translate(0.0820312 0.835449)" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <a href="#" class="flex justify-center items-center">
                <svg class="h-9 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 124 38" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M50.8299 17.3952C54.7246 18.342 56.3124 19.8121 56.3124 22.4701C56.3124 25.615 53.9096 27.6473 50.1907 27.6473C47.5621 27.6473 45.1252 26.7135 43.1446 24.9452C43.104 24.9089 43.0791 24.8582 43.0754 24.8038C43.0716 24.7494 43.0893 24.6957 43.1246 24.6542L44.8747 22.5724C44.8926 22.5512 44.9145 22.5336 44.9392 22.5209C44.9639 22.5082 44.9909 22.5005 45.0185 22.4983C45.0462 22.4961 45.0741 22.4995 45.1005 22.5082C45.1269 22.5169 45.1513 22.5307 45.1723 22.5489C46.8747 24.0226 48.3966 24.6506 50.2619 24.6506C51.9419 24.6506 52.9857 23.9232 52.9857 22.7541C52.9857 21.6986 52.4694 21.1088 49.4104 20.4043C45.8174 19.5351 43.7374 18.4108 43.7374 15.2323C43.7374 12.2686 46.1484 10.1986 49.5991 10.1986C51.9455 10.1986 53.9548 10.8937 55.7384 12.3244C55.8243 12.3938 55.8419 12.5185 55.7778 12.609L54.2165 14.8084C54.2002 14.831 54.1796 14.8501 54.1558 14.8647C54.1321 14.8793 54.1057 14.8891 54.0781 14.8935C54.0506 14.8978 54.0224 14.8967 53.9953 14.8902C53.9682 14.8837 53.9427 14.8718 53.9202 14.8554C52.4218 13.7381 50.9928 13.1959 49.5509 13.1959C48.0643 13.1959 47.0646 13.9104 47.0646 14.9718C47.0646 16.095 47.635 16.6302 50.8305 17.3934L50.8299 17.3952ZM64.7256 14.2432C63.1144 14.2432 61.7924 14.8783 60.7016 16.1779V14.7137C60.7016 14.6582 60.6795 14.6049 60.6403 14.5657C60.601 14.5264 60.5478 14.5043 60.4922 14.5043H57.6308C57.5752 14.5043 57.522 14.5264 57.4827 14.5657C57.4435 14.6049 57.4214 14.6582 57.4214 14.7137V30.9851C57.4214 31.0998 57.5155 31.1939 57.6308 31.1939H60.4928C60.6087 31.1939 60.7028 31.0998 60.7028 30.9846V25.8479C61.793 27.0711 63.1156 27.6697 64.7274 27.6697C67.7235 27.6697 70.755 25.3645 70.755 20.9565C70.755 16.5484 67.7218 14.2432 64.7256 14.2432ZM67.4248 20.9571C67.4248 23.2011 66.0429 24.7676 64.0635 24.7676C62.1053 24.7676 60.6293 23.1299 60.6293 20.9571C60.6293 18.7842 62.1053 17.1465 64.0635 17.1465C66.0111 17.1465 67.4254 18.7489 67.4254 20.9571H67.4248ZM78.5255 14.2432C74.6679 14.2432 71.6465 17.2129 71.6465 21.0059C71.6465 24.7565 74.6467 27.695 78.4773 27.695C82.3485 27.695 85.3793 24.7347 85.3793 20.9571C85.3793 17.1923 82.3684 14.2427 78.5249 14.2427L78.5255 14.2432ZM78.5249 24.7906C76.4726 24.7906 74.926 23.1423 74.926 20.9565C74.926 18.7618 76.4197 17.1694 78.4779 17.1694C80.542 17.1694 82.1003 18.8177 82.1003 21.0047C82.1003 23.1981 80.5961 24.79 78.5249 24.79V24.7906ZM93.6168 14.5043C93.7326 14.5043 93.8261 14.5984 93.8261 14.7137V17.1735C93.8262 17.201 93.8208 17.2282 93.8104 17.2536C93.7999 17.279 93.7846 17.3021 93.7652 17.3215C93.7458 17.341 93.7227 17.3564 93.6974 17.3669C93.672 17.3774 93.6448 17.3829 93.6173 17.3829H90.4683V23.2993C90.4683 24.2343 90.8788 24.6506 91.7973 24.6506C92.3818 24.6538 92.9582 24.5145 93.4768 24.2449C93.5089 24.229 93.5444 24.2215 93.5802 24.2232C93.6159 24.2249 93.6507 24.2356 93.6811 24.2545C93.7115 24.2733 93.7366 24.2996 93.7541 24.3308C93.7715 24.3621 93.7807 24.3973 93.7808 24.433V26.7747C93.7808 26.8494 93.7397 26.9199 93.675 26.957C92.8723 27.4115 92.0208 27.6232 90.9934 27.6232C88.4689 27.6232 87.1887 26.3195 87.1887 23.7468V17.3834H85.8127C85.7853 17.3834 85.7581 17.3779 85.7328 17.3673C85.7075 17.3568 85.6846 17.3413 85.6652 17.3219C85.6459 17.3024 85.6306 17.2794 85.6202 17.254C85.6098 17.2287 85.6044 17.2015 85.6045 17.1741V14.7137C85.6045 14.5984 85.6974 14.5043 85.8127 14.5043H87.1887V11.2841C87.1887 11.1689 87.2828 11.0748 87.3993 11.0748H90.2607C90.3766 11.0748 90.4701 11.1689 90.4701 11.2841V14.5043H93.6191H93.6168ZM109.48 14.5167C109.566 14.5167 109.644 14.5696 109.675 14.6519L113.018 23.3751L116.07 14.6566C116.085 14.6155 116.112 14.5798 116.147 14.5545C116.183 14.5293 116.225 14.5156 116.269 14.5155H119.248C119.282 14.5155 119.316 14.5238 119.346 14.5398C119.376 14.5558 119.402 14.5789 119.421 14.6072C119.441 14.6354 119.452 14.668 119.456 14.7019C119.46 14.7359 119.455 14.7702 119.442 14.8019L114.477 27.6332C113.448 30.2812 112.279 31.2656 110.166 31.2656C109.036 31.2656 108.122 31.0316 107.108 30.4835C107.062 30.4584 107.027 30.4163 107.01 30.366C106.993 30.3157 106.997 30.261 107.019 30.213L107.989 28.0843C108.001 28.058 108.018 28.0345 108.04 28.0151C108.061 27.9957 108.086 27.9808 108.113 27.9714C108.14 27.9626 108.169 27.9595 108.198 27.9622C108.227 27.9649 108.255 27.9734 108.28 27.9872C108.823 28.2842 109.354 28.4342 109.859 28.4342C110.482 28.4342 110.939 28.2295 111.404 27.1981L107.311 17.3834H104.638V27.201C104.638 27.3169 104.544 27.4109 104.429 27.4109H101.567C101.539 27.4109 101.512 27.4055 101.486 27.395C101.461 27.3844 101.438 27.3689 101.418 27.3494C101.399 27.3299 101.384 27.3068 101.373 27.2813C101.363 27.2558 101.357 27.2286 101.357 27.201V17.3834H99.9824C99.9269 17.383 99.8738 17.3607 99.8345 17.3215C99.7952 17.2822 99.773 17.229 99.7725 17.1735V14.7019C99.7725 14.5861 99.8666 14.492 99.9818 14.492H101.357V13.8863C101.357 11.0719 102.754 9.58291 105.398 9.58291C106.484 9.58291 107.209 9.75638 107.777 9.92398C107.866 9.95162 107.925 10.0334 107.925 10.1251V12.5361C107.926 12.5695 107.918 12.6024 107.903 12.6322C107.888 12.662 107.866 12.6878 107.839 12.7074C107.813 12.727 107.781 12.7398 107.748 12.7448C107.715 12.7498 107.682 12.7468 107.65 12.7361C107.113 12.5573 106.634 12.4385 106.038 12.4385C105.038 12.4385 104.591 12.9578 104.591 14.1215V14.5167H109.479H109.48ZM98.2289 14.5043C98.3441 14.5043 98.4382 14.5984 98.4382 14.7137V27.2004C98.4382 27.3157 98.3441 27.4098 98.2283 27.4098H95.3662C95.3106 27.4098 95.2573 27.3877 95.218 27.3485C95.1786 27.3092 95.1564 27.256 95.1563 27.2004V14.7137C95.1563 14.5984 95.2504 14.5043 95.3656 14.5043H98.2277H98.2289ZM96.8122 8.81903C97.3565 8.81903 97.8786 9.03525 98.2634 9.42013C98.6483 9.80502 98.8645 10.327 98.8645 10.8713C98.8645 11.4156 98.6483 11.9377 98.2634 12.3225C97.8786 12.7074 97.3565 12.9236 96.8122 12.9236C96.2679 12.9236 95.7459 12.7074 95.361 12.3225C94.9762 11.9377 94.7599 11.4156 94.7599 10.8713C94.7599 10.327 94.9762 9.80502 95.361 9.42013C95.7459 9.03525 96.2679 8.81903 96.8122 8.81903ZM121.886 18.5184C121.621 18.5194 121.359 18.468 121.114 18.3671C120.869 18.2663 120.646 18.118 120.459 17.9307C120.272 17.7435 120.124 17.5211 120.023 17.2763C119.922 17.0314 119.871 16.7691 119.872 16.5043C119.872 16.2385 119.924 15.9752 120.026 15.7296C120.127 15.484 120.277 15.2608 120.465 15.0729C120.653 14.8849 120.876 14.7358 121.122 14.6341C121.367 14.5324 121.63 14.4801 121.896 14.4802C122.161 14.4791 122.423 14.5303 122.668 14.631C122.913 14.7318 123.135 14.88 123.323 15.0671C123.51 15.2543 123.658 15.4766 123.759 15.7214C123.86 15.9661 123.911 16.2284 123.91 16.4931C123.91 16.7591 123.858 17.0225 123.756 17.2682C123.655 17.514 123.506 17.7373 123.318 17.9254C123.13 18.1135 122.906 18.2627 122.661 18.3646C122.415 18.4664 122.152 18.5189 121.886 18.519V18.5184ZM121.896 14.6808C120.865 14.6808 120.084 15.5011 120.084 16.5049C120.084 17.5087 120.859 18.3179 121.886 18.3179C122.917 18.3179 123.699 17.4981 123.699 16.4937C123.699 15.4899 122.922 14.6808 121.896 14.6808ZM122.343 16.7007L122.912 17.4981H122.432L121.92 16.7666H121.479V17.4981H121.077V15.3841H122.02C122.51 15.3841 122.834 15.6358 122.834 16.0586C122.834 16.4055 122.634 16.6172 122.343 16.6995L122.343 16.7007ZM122.002 15.7469H121.478V16.4149H122.002C122.264 16.4149 122.419 16.2867 122.419 16.0797C122.419 15.8622 122.264 15.7463 122.002 15.7463V15.7469ZM18.9768 0.305176C8.75288 0.305176 0.464844 8.70847 0.464844 18.933C0.464256 28.54 7.78083 36.2953 17.1462 37.4714H20.8074C30.1728 36.2953 37.4893 28.54 37.4893 18.9324C37.4893 8.70847 29.2007 0.305176 18.9774 0.305176H18.9768ZM27.4665 27.0064C27.3877 27.1359 27.284 27.2486 27.1616 27.3379C27.0391 27.4273 26.9002 27.4917 26.7528 27.5273C26.6054 27.5629 26.4525 27.5691 26.3027 27.5455C26.1529 27.5219 26.0093 27.469 25.88 27.3898C21.5325 24.733 16.0612 24.1331 9.61732 25.605C9.46966 25.639 9.31676 25.6435 9.16736 25.6183C9.01796 25.5931 8.87499 25.5387 8.74664 25.4582C8.61829 25.3777 8.50707 25.2726 8.41934 25.1491C8.33162 25.0256 8.26911 24.886 8.23539 24.7382C8.20146 24.5905 8.19701 24.4375 8.22229 24.2881C8.24756 24.1386 8.30207 23.9956 8.3827 23.8672C8.46332 23.7389 8.56848 23.6277 8.69214 23.54C8.8158 23.4523 8.95554 23.3899 9.10336 23.3563C16.1553 21.745 22.204 22.439 27.0837 25.4204C27.3446 25.5803 27.5314 25.8371 27.603 26.1346C27.6747 26.4321 27.6254 26.7458 27.4659 27.007L27.4665 27.0064ZM29.7317 21.9656C29.5314 22.2916 29.2099 22.5248 28.8377 22.6139C28.4656 22.703 28.0733 22.6407 27.747 22.4407C22.7721 19.3828 15.1862 18.4966 9.29977 20.2837C8.93342 20.3943 8.53819 20.3552 8.2006 20.175C7.86301 19.9948 7.61058 19.6882 7.49856 19.3223C7.26922 18.5578 7.6985 17.7539 8.46121 17.5228C15.1856 15.4823 23.5436 16.4702 29.2577 19.9809C29.5837 20.1813 29.8168 20.5029 29.9058 20.875C29.9948 21.2472 29.9324 21.6394 29.7323 21.9656H29.7317ZM29.9269 16.7166C23.9594 13.173 14.1165 12.8472 8.42004 14.5761C7.98054 14.7093 7.50613 14.6624 7.10118 14.4458C6.69622 14.2292 6.3939 13.8606 6.26071 13.4211C6.12752 12.9816 6.17437 12.5072 6.39096 12.1023C6.60756 11.6973 6.97615 11.395 7.41565 11.2618C13.9548 9.27712 24.8256 9.66053 31.6952 13.7375C31.8908 13.8535 32.0617 14.0069 32.198 14.1889C32.3343 14.371 32.4334 14.5781 32.4897 14.7984C32.5459 15.0188 32.5582 15.248 32.5258 15.4731C32.4934 15.6982 32.417 15.9148 32.3009 16.1103C32.185 16.3061 32.0316 16.477 31.8495 16.6134C31.6674 16.7498 31.4603 16.849 31.2398 16.9053C31.0194 16.9615 30.79 16.9738 30.5648 16.9413C30.3397 16.9088 30.1231 16.8323 29.9275 16.716L29.9269 16.7166Z"
                        fill="currentColor" />
                </svg>
            </a>
            <a href="#" class="flex justify-center items-center">
                <svg class="h-9 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 137 37" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M53.3228 13.9636C51.5883 13.9636 50.7303 15.3285 50.3366 16.209C50.1166 16.7006 50.0551 17.0893 49.8767 17.0893C49.6253 17.0893 49.8054 16.7514 49.5997 16.0022C49.329 15.0165 48.5133 13.9636 46.78 13.9636C44.9577 13.9636 44.1775 15.5032 43.8075 16.3493C43.5545 16.9276 43.5542 17.0893 43.3597 17.0893C43.0778 17.0893 43.3113 16.6298 43.4381 16.0897C43.688 15.0263 43.498 14.2136 43.498 14.2136H40.6094V25.0758H44.5523C44.5523 25.0758 44.5523 20.5363 44.5523 19.6714C44.5523 18.6054 44.9982 17.2528 45.7625 17.2528C46.6456 17.2528 46.8224 17.931 46.8224 19.1869C46.8224 20.3255 46.8224 25.0781 46.8224 25.0781H50.7812C50.7812 25.0781 50.7812 20.511 50.7812 19.6714C50.7812 18.7226 51.1684 17.2528 51.9972 17.2528C52.8926 17.2528 53.0511 18.2056 53.0511 19.1869C53.0511 20.1682 53.0511 25.0758 53.0511 25.0758H56.9387C56.9387 25.0758 56.9387 20.7719 56.9387 18.6882C56.9387 15.8535 55.9395 13.9636 53.3228 13.9636Z"
                        fill="currentColor" />
                    <path
                        d="M120.249 13.9636C118.514 13.9636 117.656 15.3285 117.262 16.209C117.042 16.7006 116.981 17.0893 116.802 17.0893C116.551 17.0893 116.719 16.6601 116.526 16.0022C116.237 15.0217 115.518 13.9636 113.706 13.9636C111.884 13.9636 111.103 15.5032 110.733 16.3493C110.48 16.9276 110.48 17.0893 110.286 17.0893C110.004 17.0893 110.237 16.6298 110.364 16.0897C110.614 15.0263 110.424 14.2136 110.424 14.2136H107.535V25.0758H111.478C111.478 25.0758 111.478 20.5363 111.478 19.6714C111.478 18.6054 111.924 17.2528 112.688 17.2528C113.571 17.2528 113.748 17.931 113.748 19.1869C113.748 20.3255 113.748 25.0781 113.748 25.0781H117.707C117.707 25.0781 117.707 20.511 117.707 19.6714C117.707 18.7226 118.094 17.2528 118.923 17.2528C119.819 17.2528 119.977 18.2056 119.977 19.1869C119.977 20.1682 119.977 25.0758 119.977 25.0758H123.865C123.865 25.0758 123.865 20.7719 123.865 18.6882C123.865 15.8535 122.865 13.9636 120.249 13.9636Z"
                        fill="currentColor" />
                    <path
                        d="M62.7138 22.5371C61.7709 22.7549 61.2821 22.4645 61.2821 21.8395C61.2821 20.9834 62.1676 20.6406 63.4315 20.6406C63.9887 20.6406 64.5126 20.6888 64.5126 20.6888C64.5126 21.0552 63.7172 22.3056 62.7138 22.5371ZM63.6737 13.9661C60.6534 13.9661 58.4862 15.0765 58.4862 15.0765V18.3405C58.4862 18.3405 60.8795 16.9645 62.821 16.9645C64.3707 16.9645 64.5611 17.8003 64.4905 18.494C64.4905 18.494 64.0437 18.3757 62.6797 18.3757C59.4661 18.3757 57.8438 19.8362 57.8438 22.1782C57.8438 24.3997 59.667 25.3284 61.2031 25.3284C63.4446 25.3284 64.4299 23.8221 64.7327 23.1075C64.9428 22.6117 64.9811 22.2776 65.1699 22.2776C65.3849 22.2776 65.3125 22.5172 65.3021 23.0107C65.2839 23.8748 65.3246 24.528 65.4616 25.0782H68.4334V19.7326C68.4334 16.395 67.2525 13.9661 63.6737 13.9661Z"
                        fill="currentColor" />
                    <path d="M74.9258 25.0783H78.8688V10.9255H74.9258V25.0783Z" fill="currentColor" />
                    <path
                        d="M83.2111 19.6471C83.2111 18.6705 84.1184 17.7819 85.7842 17.7819C87.5992 17.7819 89.059 18.6558 89.3864 18.8542V15.0765C89.3864 15.0765 88.2331 13.9661 85.3984 13.9661C82.4103 13.9661 79.9219 15.7146 79.9219 19.4781C79.9219 23.2415 82.1801 25.3284 85.3904 25.3284C87.898 25.3284 89.3928 23.9506 89.3928 23.9506V20.3624C88.9199 20.6271 87.6021 21.5415 85.8023 21.5415C83.8964 21.5415 83.2111 20.6648 83.2111 19.6471Z"
                        fill="currentColor" />
                    <path
                        d="M97.373 13.9662C95.0905 13.9662 94.2223 16.1293 94.047 16.5049C93.8716 16.8804 93.785 17.0964 93.6415 17.0918C93.3923 17.0837 93.566 16.6308 93.6631 16.3375C93.8467 15.7834 94.2357 14.3297 94.2357 12.543C94.2357 11.3311 94.0718 10.9255 94.0718 10.9255H90.668V25.0783H94.611C94.611 25.0783 94.611 20.5543 94.611 19.6741C94.611 18.7937 94.9623 17.2554 95.9556 17.2554C96.7784 17.2554 97.036 17.8651 97.036 19.0927C97.036 20.3201 97.036 25.0783 97.036 25.0783H100.979C100.979 25.0783 100.979 21.7679 100.979 19.3289C100.979 16.5406 100.517 13.9662 97.373 13.9662Z"
                        fill="currentColor" />
                    <path
                        d="M102.258 14.2285V25.0782H106.201V14.2285C106.201 14.2285 105.538 14.6162 104.233 14.6162C102.929 14.6162 102.258 14.2285 102.258 14.2285Z"
                        fill="currentColor" />
                    <path
                        d="M104.218 10.8157C102.885 10.8157 101.805 11.521 101.805 12.391C101.805 13.2609 102.885 13.9662 104.218 13.9662C105.551 13.9662 106.632 13.2609 106.632 12.391C106.632 11.521 105.551 10.8157 104.218 10.8157Z"
                        fill="currentColor" />
                    <path
                        d="M69.707 14.2285V25.0782H73.6499V14.2285C73.6499 14.2285 72.9872 14.6162 71.6825 14.6162C70.3779 14.6162 69.707 14.2285 69.707 14.2285Z"
                        fill="currentColor" />
                    <path
                        d="M71.6674 10.8157C70.3345 10.8157 69.2539 11.521 69.2539 12.391C69.2539 13.2609 70.3345 13.9662 71.6674 13.9662C73.0005 13.9662 74.0811 13.2609 74.0811 12.391C74.0811 11.521 73.0005 10.8157 71.6674 10.8157Z"
                        fill="currentColor" />
                    <path
                        d="M130.616 22.744C129.712 22.744 129.047 21.5972 129.047 19.9993C129.047 18.4475 129.73 17.2552 130.585 17.2552C131.682 17.2552 132.15 18.2614 132.15 19.9993C132.15 21.8071 131.719 22.744 130.616 22.744ZM131.699 13.9636C129.672 13.9636 128.743 15.4835 128.339 16.3493C128.072 16.9214 128.086 17.0893 127.891 17.0893C127.609 17.0893 127.843 16.6298 127.97 16.0897C128.219 15.0263 128.029 14.2136 128.029 14.2136H125.141V28.0756H129.084C129.084 28.0756 129.084 25.8073 129.084 23.6807C129.55 24.4722 130.414 25.3179 131.747 25.3179C134.598 25.3179 136.033 22.9056 136.033 19.6462C136.033 15.952 134.315 13.9636 131.699 13.9636Z"
                        fill="currentColor" />
                    <path
                        d="M26.682 17.2446C26.9471 17.213 27.2012 17.2115 27.4346 17.2446C27.5697 16.9348 27.593 16.4007 27.4714 15.819C27.2907 14.9545 27.0463 14.4313 26.5411 14.5127C26.036 14.5941 26.0173 15.2205 26.1979 16.0851C26.2995 16.5714 26.4804 16.987 26.682 17.2446Z"
                        fill="currentColor" />
                    <path
                        d="M22.3442 17.9286C22.7056 18.0873 22.9278 18.1924 23.0147 18.1005C23.0706 18.0433 23.054 17.934 22.9677 17.7929C22.7893 17.5017 22.4222 17.2064 22.033 17.0405C21.2368 16.6978 20.2872 16.8118 19.5546 17.3381C19.3129 17.5153 19.0836 17.7608 19.1164 17.9098C19.1271 17.958 19.1633 17.9943 19.2481 18.0062C19.4476 18.029 20.1443 17.6767 20.9468 17.6276C21.5133 17.5929 21.9827 17.7701 22.3442 17.9286Z"
                        fill="currentColor" />
                    <path
                        d="M21.6149 18.3436C21.1441 18.4179 20.8844 18.5732 20.7177 18.7175C20.5755 18.8417 20.4875 18.9792 20.4883 19.0759C20.4886 19.1219 20.5086 19.1484 20.5243 19.1618C20.5458 19.1806 20.5712 19.1911 20.6017 19.1911C20.7081 19.1911 20.9462 19.0955 20.9462 19.0955C21.6014 18.861 22.0335 18.8895 22.4618 18.9383C22.6985 18.9648 22.8103 18.9795 22.8622 18.8984C22.8776 18.8751 22.8962 18.8247 22.8488 18.7479C22.7385 18.569 22.2632 18.2666 21.6149 18.3436"
                        fill="currentColor" />
                    <path
                        d="M25.2163 19.8666C25.5358 20.0237 25.8877 19.962 26.0024 19.7289C26.1169 19.4959 25.9506 19.1796 25.6309 19.0224C25.3113 18.8655 24.9594 18.927 24.8448 19.1601C24.7303 19.3933 24.8965 19.7094 25.2163 19.8666Z"
                        fill="currentColor" />
                    <path
                        d="M27.2703 18.0709C27.0106 18.0664 26.7953 18.3516 26.7892 18.7076C26.7831 19.0638 26.9888 19.356 27.2485 19.3604C27.5081 19.3649 27.7236 19.0797 27.7295 18.7237C27.7356 18.3674 27.5299 18.0752 27.2703 18.0709Z"
                        fill="currentColor" />
                    <path
                        d="M9.83004 24.4919C9.76544 24.411 9.65932 24.4356 9.55655 24.4596C9.48477 24.4764 9.40345 24.4952 9.31429 24.4937C9.1233 24.4899 8.96157 24.4085 8.87074 24.2689C8.75244 24.0872 8.75928 23.8163 8.88991 23.5064C8.90748 23.4644 8.92824 23.418 8.95084 23.3674C9.15903 22.9001 9.50765 22.118 9.11629 21.3728C8.82172 20.812 8.34133 20.4626 7.76373 20.3893C7.20923 20.319 6.63835 20.5246 6.27421 20.9263C5.69973 21.5601 5.60995 22.4226 5.72105 22.7274C5.76179 22.8389 5.82544 22.8698 5.87174 22.8761C5.96945 22.8892 6.11398 22.8181 6.20453 22.5745C6.211 22.557 6.21962 22.5298 6.23042 22.4953C6.27082 22.3666 6.34593 22.1268 6.46897 21.9346C6.61733 21.7028 6.8484 21.5432 7.11962 21.4851C7.39594 21.4259 7.67834 21.4787 7.91474 21.6335C8.31723 21.8967 8.47219 22.3898 8.30037 22.8604C8.21157 23.1037 8.06727 23.569 8.09913 23.9514C8.16344 24.7251 8.63936 25.0359 9.06699 25.069C9.48275 25.0845 9.77331 24.8513 9.84682 24.6806C9.89021 24.5797 9.85359 24.5183 9.83005 24.4919"
                        fill="currentColor" />
                    <path
                        d="M13.781 10.2801C15.137 8.71317 16.8063 7.35092 18.3016 6.58601C18.3533 6.55944 18.4082 6.61569 18.3802 6.66639C18.2614 6.88141 18.0329 7.34188 17.9604 7.69111C17.9491 7.74554 18.0083 7.78647 18.0542 7.75518C18.9845 7.12106 20.6029 6.44157 22.0223 6.35422C22.0833 6.35044 22.1128 6.42867 22.0643 6.46589C21.8484 6.63154 21.6123 6.86065 21.4398 7.09244C21.4104 7.13187 21.4381 7.18868 21.4873 7.18898C22.484 7.19608 23.8891 7.54489 24.805 8.05859C24.8669 8.09327 24.8227 8.21326 24.7535 8.19739C23.3678 7.87989 21.0996 7.63891 18.7435 8.21358C16.6401 8.72668 15.0346 9.51873 13.8634 10.3705C13.8042 10.4137 13.7331 10.3355 13.781 10.2801L13.781 10.2801ZM20.5345 25.4617C20.5346 25.462 20.5348 25.4626 20.5349 25.4626C20.5352 25.463 20.5353 25.4638 20.5357 25.4642C20.5353 25.4634 20.5349 25.4626 20.5345 25.4617ZM26.1264 26.1218C26.1666 26.1049 26.1944 26.0591 26.1896 26.0136C26.184 25.9575 26.134 25.9167 26.0779 25.9225C26.0779 25.9225 23.1841 26.3507 20.4504 25.3501C20.7482 24.3823 21.5399 24.7317 22.7367 24.8283C24.8938 24.9569 26.827 24.6418 28.2558 24.2316C29.494 23.8765 31.12 23.1759 32.3831 22.1789C32.8091 23.1148 32.9595 24.1446 32.9595 24.1446C32.9595 24.1446 33.2893 24.0857 33.5648 24.2552C33.8252 24.4155 34.0162 24.7486 33.8857 25.6099C33.6201 27.219 32.9362 28.525 31.7868 29.7265C31.087 30.4796 30.2375 31.1345 29.2656 31.6107C28.7494 31.8818 28.1998 32.1164 27.6192 32.3059C23.2857 33.7212 18.85 32.1653 17.4201 28.8239C17.3061 28.5727 17.2095 28.3098 17.1335 28.0347C16.5241 25.8328 17.0414 23.1911 18.6584 21.5282C18.6585 21.528 18.6582 21.5273 18.6584 21.5273C18.758 21.4215 18.8598 21.2967 18.8598 21.1398C18.8598 21.0086 18.7764 20.8701 18.7041 20.7719C18.1383 19.9514 16.1787 18.5531 16.572 15.8472C16.8545 13.9031 18.5546 12.5341 20.1397 12.6152C20.2736 12.6222 20.4078 12.6303 20.5415 12.6382C21.2284 12.679 21.8276 12.7671 22.3931 12.7906C23.3395 12.8316 24.1906 12.6939 25.1986 11.8541C25.5386 11.5707 25.8112 11.3252 26.2725 11.247C26.321 11.2387 26.4416 11.1954 26.6827 11.2068C26.9287 11.2199 27.163 11.2875 27.3735 11.4276C28.1817 11.9654 28.2962 13.2677 28.3381 14.2205C28.362 14.7643 28.4279 16.0801 28.4502 16.4579C28.5017 17.3215 28.7287 17.4433 29.188 17.5945C29.4463 17.6797 29.6861 17.743 30.0395 17.8422C31.1092 18.1425 31.7435 18.4472 32.1431 18.8386C32.3816 19.0831 32.4925 19.3431 32.5268 19.5909C32.6528 20.5111 31.8123 21.6478 29.5872 22.6807C27.1549 23.8095 24.2041 24.0954 22.1653 23.8684C22.009 23.851 21.4529 23.788 21.451 23.7877C19.8201 23.5681 18.8899 25.6757 19.8686 27.1196C20.4995 28.0501 22.2176 28.6558 23.9367 28.6561C27.8783 28.6565 30.9078 26.9734 32.0347 25.5198C32.0685 25.4763 32.0718 25.4716 32.1249 25.3912C32.1803 25.3077 32.1347 25.2616 32.0656 25.3089C31.1448 25.9389 27.0552 28.4401 22.6808 27.6876C22.6808 27.6876 22.1493 27.6002 21.6641 27.4115C21.2785 27.2615 20.4715 26.8902 20.3734 26.0623C23.9036 27.154 26.1264 26.1219 26.1264 26.1219V26.1218ZM6.73637 17.7322C5.50864 17.971 4.42653 18.6668 3.76488 19.6279C3.36935 19.2981 2.63255 18.6595 2.50245 18.4107C1.44601 16.4049 3.65533 12.5048 5.19871 10.3023C9.01295 4.85925 14.9868 0.739281 17.7523 1.48684C18.2019 1.61408 19.6908 3.3404 19.6908 3.3404C19.6908 3.3404 16.9266 4.87423 14.363 7.01221C10.9088 9.6719 8.2995 13.5375 6.73637 17.7322ZM8.79942 26.937C8.61359 26.9687 8.42406 26.9814 8.23288 26.9767C6.38562 26.9272 4.39022 25.2641 4.19193 23.2919C3.97278 21.1119 5.08663 19.4342 7.05879 19.0364C7.29457 18.9889 7.57951 18.9615 7.88676 18.9775C8.99175 19.038 10.6201 19.8864 10.9921 22.2937C11.3216 24.4256 10.7983 26.5961 8.79942 26.937V26.937ZM33.8233 23.0768C33.8075 23.0209 33.7044 22.6441 33.5628 22.1901C33.4211 21.7358 33.2745 21.4162 33.2745 21.4162C33.8426 20.5656 33.8527 19.805 33.7772 19.374C33.6965 18.84 33.4742 18.3849 33.0261 17.9145C32.5779 17.4441 31.6614 16.9623 30.3733 16.6006C30.2261 16.5592 29.7403 16.4259 29.6976 16.413C29.6942 16.3851 29.662 14.8197 29.6328 14.1478C29.6114 13.662 29.5697 12.9036 29.3344 12.1566C29.054 11.1455 28.5653 10.2608 27.9555 9.69474C29.6385 7.95018 30.6892 6.02826 30.6867 4.37951C30.6818 1.20879 26.7878 0.24946 21.9891 2.23648C21.9841 2.23854 20.9797 2.66446 20.9724 2.66802C20.9678 2.66372 19.1343 0.864594 19.1067 0.84057C13.6355 -3.9316 -3.4707 15.0823 1.99847 19.7003L3.19371 20.7129C2.88368 21.516 2.76185 22.4362 2.86137 23.4258C2.9891 24.6967 3.64467 25.915 4.70726 26.8562C5.71596 27.75 7.04217 28.3156 8.32916 28.3145C10.4574 33.2191 15.3203 36.2279 21.0221 36.3972C27.1383 36.5789 32.2724 33.709 34.4238 28.5537C34.5645 28.1919 35.1617 26.5617 35.1617 25.1226C35.1617 23.6763 34.344 23.0768 33.8233 23.0768Z"
                        fill="currentColor" />
                </svg>
            </a>
            <a href="#" class="flex justify-center items-center">
                <svg class="h-6 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 124 21" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16.813 0.069519L12.5605 11.1781L8.28275 0.069519H0.96875V20.2025H6.23233V6.89245L11.4008 20.2025H13.7233L18.8634 6.89245V20.2025H24.127V0.069519H16.813Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M34.8015 16.461V15.1601C34.3138 14.4663 33.2105 14.1334 32.1756 14.1334C30.9504 14.1334 29.8174 14.679 29.8174 15.8245C29.8174 16.9699 30.9504 17.5155 32.1756 17.5155C33.2105 17.5155 34.3138 17.1533 34.8015 16.4595V16.461ZM34.8015 20.201V18.7519C33.8841 19.8358 32.1117 20.5633 30.213 20.5633C27.9484 20.5633 25.1367 19.0218 25.1367 15.7614C25.1367 12.2326 27.9469 11.0578 30.213 11.0578C32.1756 11.0578 33.9183 11.6885 34.8015 12.7767V11.3277C34.8015 10.0605 33.7042 9.18487 31.8039 9.18487C30.3349 9.18487 28.8658 9.75687 27.6748 10.7542L25.9322 7.52314C27.831 5.92447 30.3691 5.26007 32.6291 5.26007C36.1783 5.26007 39.5179 6.561 39.5179 11.0871V20.2025H34.8015V20.201Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M40.1562 18.3002L42.1145 14.9826C43.2178 15.9447 45.57 16.9421 47.3186 16.9421C48.7237 16.9421 49.3051 16.5461 49.3051 15.9154C49.3051 14.1055 40.7094 15.9741 40.7094 10.0605C40.7094 7.4938 42.9739 5.26007 47.0391 5.26007C49.5489 5.26007 51.6276 6.04474 53.22 7.1902L51.4194 10.4858C50.5303 9.6366 48.8471 8.88127 47.0747 8.88127C45.9715 8.88127 45.2384 9.30514 45.2384 9.8786C45.2384 11.4773 53.7999 9.81994 53.7999 15.7966C53.7999 18.5686 51.3257 20.5633 47.103 20.5633C44.4429 20.5633 41.7205 19.6862 40.1562 18.3002Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M64.7231 20.2025V11.7149C64.7231 9.94019 63.7759 9.36672 62.2712 9.36672C60.8958 9.36672 59.9784 10.1177 59.4313 10.7821V20.201H54.7148V0.069519H59.4313V7.40285C60.3145 6.37619 62.063 5.26152 64.5372 5.26152C67.9065 5.26152 69.4335 7.13299 69.4335 9.81992V20.2025H64.7231Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M80.0535 16.461V15.1601C79.5643 14.4663 78.4626 14.1334 77.4217 14.1334C76.1965 14.1334 75.0635 14.679 75.0635 15.8245C75.0635 16.9699 76.1965 17.5155 77.4217 17.5155C78.4626 17.5155 79.5643 17.1533 80.0535 16.4595V16.461ZM80.0535 20.201V18.7519C79.1346 19.8358 77.3578 20.5633 75.465 20.5633C73.199 20.5633 70.3828 19.0218 70.3828 15.7614C70.3828 12.2326 73.199 11.0578 75.465 11.0578C77.4217 11.0578 79.1644 11.6885 80.0535 12.7767V11.3277C80.0535 10.0605 78.9488 9.18487 77.056 9.18487C75.5869 9.18487 74.1164 9.75687 72.9209 10.7542L71.1783 7.52314C73.0771 5.92447 75.6152 5.26007 77.8812 5.26007C81.4289 5.26007 84.7625 6.561 84.7625 11.0871V20.2025H80.0535V20.201Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M93.8157 16.461C95.6802 16.461 97.0913 15.097 97.0913 12.897C97.0913 10.7263 95.6802 9.36232 93.8157 9.36232C92.8046 9.36232 91.5854 9.90645 90.9995 10.6911V15.1601C91.5854 15.9447 92.8061 16.461 93.8157 16.461ZM86.2891 20.201V0.069519H90.9995V7.34419C92.0485 6.01247 93.6688 5.2418 95.3784 5.26152C99.0778 5.26152 101.895 8.13032 101.895 12.897C101.895 17.847 99.0198 20.5633 95.3784 20.5633C93.7235 20.5633 92.2247 19.8989 90.9995 18.5114V20.2025H86.2891V20.201Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M102.844 0.069519H107.554V20.2025H102.844V0.069519Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M116.336 9.00154C114.284 9.00154 113.49 10.2101 113.303 11.2646H119.396C119.27 10.2379 118.508 9.00154 116.336 9.00154ZM108.5 12.897C108.5 8.67447 111.712 5.26007 116.336 5.26007C120.709 5.26007 123.892 8.42807 123.892 13.3781V14.4385H113.368C113.704 15.7335 114.929 16.8218 117.067 16.8218C118.108 16.8218 119.821 16.3686 120.681 15.5839L122.725 18.6317C121.26 19.9267 118.81 20.5633 116.55 20.5633C111.991 20.5633 108.5 17.6358 108.5 12.897Z"
                        fill="currentColor" />
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- lomba --}}
<section id="lomba" class="bg-white dark:bg-gray-900 mt-16" data-aos="fade-up" data-aos-duration="1000">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl text-center font-semibold text-gray-800 lg:text-4xl dark:text-white">Cabang Lomba
        </h1>
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-4 xl:grid-cols-3 items-center">
            {{-- dc --}}
            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 md:col-span-2 xl:col-span-1">
                <img class="rounded-t-lg w-1/3 md:w-1/2 mx-auto" src="{{asset('images/logo/CD.png')}}" alt="logo dc" />
                <div class="p-5">
                    <a href="/detail-dc" class="text-center">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Design
                            Challenge</h5>
                    </a>
                    <p class="mb-3 font-normal text-justify text-gray-600 dark:text-gray-400">Politeknik Negeri Bali
                        Design Challenge (PNBDC) merupakan kegiatan perlombaan yang akan berfokus dalam pembuatan sebuah
                        desain UI/UX serta penyelesain suatu masalah yang nantinya akan dituangkan dalam sebuah desain.
                    </p>
                    <a href="/detail-dc"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-lightblue rounded-lg hover:bg-primary-blue focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Baca Selengkapnya
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- wdc --}}
            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 md:col-span-2 md:col-start-3 xl:col-span-1 xl:col-start-2">
                <a href="#">
                    <img class="rounded-t-lg w-1/3 md:w-1/2 mx-auto" src="{{asset('images/logo/WDC.png')}}"
                        alt="logo dc" />
                </a>
                <div class="p-5">
                    <a href="#" class="text-center">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Web Design
                            Competition</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-600 dark:text-gray-400 text-justify">Politeknik Negeri Bali Web
                        Design Competition (PNBWDC) merupakan kegiatan perlombaan yang berfokus dalam merancang serta
                        membuat sebuah website yang memiliki peran sangat penting di era modern ini.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-lightblue rounded-lg hover:bg-primary-blue focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Baca Selengkapnya
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- ctf --}}
            <div
                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 md:col-start-2 md:col-span-2 xl:col-span-1 xl:col-start-3">
                <a href="#">
                    <img class="rounded-t-lg w-1/3 md:w-1/2 mx-auto" src="{{asset('images/logo/CTF.png')}}"
                        alt="logo dc" />
                </a>
                <div class="p-5">
                    <a href="#" class="text-center">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Capture The
                            Flag</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-600 dark:text-gray-400 text-justify">Politeknik Negeri Bali
                        Capture The
                        Flags (PNBCTF) Merupakan Kegiatan perlombaan yang akan berfokus dalam mencermati permasalahan
                        keamanan jaringan,
                        keamanan komputer, dan keamanan informasi.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary-lightblue rounded-lg hover:bg-primary-blue focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Baca Selengkapnya
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- chilltalks --}}
<section id="chilltalks" class="text-gray-600 body-font" data-aos="fade-left" data-aos-duration="1000">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="{{asset('images/lomba/ilus ct.jpg')}}">
        </div>
        <div
            class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font font-bold sm:text-3xl text-2xl mb-4 text-gray-900">ChillTalks Intechfest
                <br class="hidden lg:inline-block">
            </h1>
            <p class="mb-8 leading-relaxed">ChillTalks Intechfest Merupakan Kegiatan Seminar atau Webinar Nasional yang
                dimana pada tahun ini mengangkat topik "FinTech dan Data Security".</p>
            <div class="flex justify-center">
                <a
                    class="inline-flex text-white bg-primary-lightblue border-0 py-2 px-6 focus:outline-none hover:bg-primary-blue rounded text-lg">Daftar
                    Chilltalks</a>
            </div>
        </div>
    </div>
</section>

{{-- about --}}
<section class="text-gray-600 body-font" data-aos="fade-right" data-aos-duration="1000">
    <div class="container mx-auto flex px-5 mb-24 md:flex-row flex-col items-center">
        <div
            class="order-2 md:order-1 lg:flex-grow md:w-full lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-3xl text-2xl mb-4 font-extrabold text-gray-900">Dapatkan informasi tentang kami</h1>
            <p class="mb-8 leading-relaxed text-justify">
                Kunjungi website kami dan ikuti akun Instagram resmi kami untuk mendapatkan informasi terkini seputar
                lomba dan seminar ini. Dapatkan kesempatan untuk memenangkan hadiah menarik, mengeksplorasi teknologi terbaru, dan
                memperluas pengetahuan Anda dalam bidang IT. Mari jalin hubungan yang lebih erat dan
                temukan potensi Anda dalam dunia digital bersama kami.</p>
            <div class="flex md:flex-row">
                <button
                    class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                    <span class="ml-4 flex items-start flex-col leading-none">
                        <span class="text-xs text-gray-600 mb-1">Follow melalui</span>
                        <span class="title-font font-medium">Instagram</span>
                    </span>
                </button>
                <button
                    class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center lg:ml-4 md:ml-0 ml-4 md:mt-4 mt-0 lg:mt-0 hover:bg-gray-200 focus:outline-none">
                    <img src="{{asset('images/logo/monokrom.png')}}" class="w-6" alt="logo">
                    <span class="ml-4 flex items-start flex-col leading-none">
                        <span class="text-xs text-gray-600 mb-1">Daftar akun</span>
                        <span class="title-font font-medium">IntechFest</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="order-1 md:order-2 md:w-2/3 lg:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{asset('images/maskot/about.png')}}">
        </div>
    </div>
</section>

{{-- faq --}}
<section class="bg-white dark:bg-gray-900" id="faq" data-aos="fade-up" data-aos-duration="1000">
    <div class="container px-6 py-10 mx-auto">
        <h2 class="title-font text-center font-bold sm:text-4xl text-3xl mb-4 text-gray-900">Pertanyaan yang sering ditanyakan</h2>
        <div id="accordion-flush" data-accordion="collapse"
            data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
            data-inactive-classes="text-gray-500 dark:text-gray-400">
            <h2 id="accordion-flush-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                    aria-controls="accordion-flush-body-1">
                    <span>Bagaimana cara pendaftaran lomba Intech Fest?</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400 ml-4">Pendaftaran akan dilakukan melalui website official
                        Intech Fest atau dapat melihat tata cara pendaftaran melalui Guide Book masing-masing lomba yang
                        ingin diikuti.</p>
                </div>
            </div>
            <h2 id="accordion-flush-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                    aria-controls="accordion-flush-body-2">
                    <span>Apakah Webinar/ChillTalks dibuka untuk umum
                        dan apa topik yang akan dibahas?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400 ml-4">Webinar/Chillstalks dibuka untuk umum. Topik yang
                        dibahas adalah FinTech dan Data Security.</p>
                </div>
            </div>
            <h2 id="accordion-flush-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                    data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                    aria-controls="accordion-flush-body-3">
                    <span>Apa saja kriteria penilaiannya?</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400 ml-4">Kriteria penilaian lomba akan dijelaskan saat
                        Technical Meeting</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- media partner --}}
<section class="bg-white dark:bg-gray-900" data-aos="fade-up" data-aos-duration="1000">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
        <h3 class="text-xl font-bold mb-3 text-center text-primary-blue">Special thanks to our</h3>
        <h2 class="mb-8 lg:mb-16 text-2xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
            Media Partner And Community Partner</h2>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                </div>
            </div>
            <div class="slider-reverse">
                <div class="slide-track-reverse">
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                </div>
            </div>
    </div>
</section>
@endsection