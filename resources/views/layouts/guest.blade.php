<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
{{--                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
                    <svg class="w-36 sm:w-36" width="213" height="54" viewBox="0 0 213 54" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="54" height="54" rx="8" fill="white"></rect><path d="M28.2312 29.9231C29.2547 28.1883 30.8611 27.6794 32.4355 28.5434C33.7576 29.2689 34.3671 31.1121 33.7928 32.6481C33.1933 34.2516 31.4259 35.0634 29.9062 34.4693C28.4395 33.8959 27.3318 31.7486 28.2312 29.9231Z" fill="#27272a"></path><path d="M19.8155 23.8653C19.1668 22.5333 19.2857 21.2963 20.1208 20.2147C20.8659 19.2497 21.8903 18.832 23.0645 19.1021C24.3965 19.4085 25.1822 20.3417 25.4876 21.7457C25.7799 23.0896 24.9987 24.6712 23.7674 25.2505C22.2539 25.9627 20.7816 25.4639 19.8155 23.8653Z" fill="#27272a"></path><path d="M19.5881 30.257C20.4007 28.4621 21.9917 27.7127 23.5354 28.3433C25.0303 28.9539 25.8634 30.6585 25.4418 32.244C24.9846 33.9632 23.3129 34.982 21.6487 34.5555C20.158 34.1734 19.1656 32.3612 19.5083 30.6473C19.53 30.5387 19.5488 30.4293 19.5881 30.257Z" fill="#27272a"></path><path d="M27.8896 22.3096C28.0476 19.8766 29.9421 18.7107 31.6846 19.1223C33.0795 19.4517 34.0468 20.8209 34.0264 22.362C34.006 23.9024 32.9498 25.2078 31.4801 25.5088C30.138 25.7837 28.7278 24.9751 28.1856 23.5833C28.0375 23.2034 27.984 22.7813 27.8896 22.3096Z" fill="#27272a"></path><path d="M16.0294 24.4167C14.6995 24.8284 13.7636 24.3222 13.4956 23.1087C13.2835 22.1482 13.9708 21.0994 14.9445 20.8979C15.7409 20.7331 16.4826 21.166 16.8359 22.002C17.1925 22.8459 16.9204 23.7031 16.0294 24.4167Z" fill="#27272a"></path><path d="M39.8154 22.0142C40.1274 23.1845 39.7527 24.1298 38.8833 24.4838C37.9881 24.8482 37.0415 24.4582 36.6434 23.5609C36.2442 22.6612 36.5539 21.6038 37.3599 21.1138C38.2507 20.5723 39.1366 20.8774 39.8154 22.0142Z" fill="#27272a"></path><path d="M37.3623 12.9652C38.5562 12.4806 39.5377 12.909 39.8884 14.0103C40.2177 15.0442 39.6849 16.0571 38.6321 16.3982C37.9102 16.6321 37.0243 16.2147 36.6574 15.4678C36.2206 14.5786 36.4374 13.7574 37.3623 12.9652Z" fill="#27272a"></path><path d="M14.017 29.5749C14.7574 28.986 15.4789 28.8755 16.2246 29.4075C16.8598 29.8607 17.0729 30.5362 16.9325 31.2971C16.7775 32.1379 16.2655 32.6797 15.4561 32.8015C14.7187 32.9125 14.1259 32.5863 13.7396 31.9173C13.2695 31.1032 13.3956 30.3257 14.017 29.5749Z" fill="#27272a"></path><path d="M39.4923 29.6602C40.0391 30.4202 40.1613 31.1539 39.694 31.9513C39.3047 32.6156 38.7124 32.8834 38.0341 32.8169C37.266 32.7417 36.7652 32.2279 36.5324 31.4329C36.3214 30.7123 36.5822 29.8985 37.1725 29.4393C37.8707 28.8962 38.6067 28.9503 39.4923 29.6602Z" fill="#27272a"></path><path d="M39.5501 40.3047C38.7408 41.0812 37.8442 41.182 37.1855 40.619C36.4054 39.9522 36.2445 39.0086 36.755 38.0938C37.1817 37.3291 38.0617 37.0168 38.8642 37.3384C39.9378 37.7687 40.3652 39.3805 39.5501 40.3047Z" fill="#27272a"></path><path d="M16.1872 40.664C14.9491 41.2219 13.9332 40.8269 13.5747 39.7048C13.2126 38.5713 13.7763 37.5507 14.9287 37.2533C15.641 37.0695 16.3803 37.4445 16.7606 38.1827C17.1915 39.0192 17.01 39.8716 16.1872 40.664Z" fill="#27272a"></path><path d="M22.7503 40.9518C21.7236 40.6841 21.1445 40.0149 21.1226 39.145C21.1012 38.2905 21.6882 37.5068 22.523 37.2755C23.2807 37.0656 24.0879 37.4722 24.4772 38.26C25.0992 39.5186 24.2813 40.8458 22.7503 40.9518Z" fill="#27272a"></path><path d="M28.9395 39.8521C28.645 38.7085 28.9325 37.8559 29.7088 37.4331C30.4618 37.023 31.38 37.221 31.8905 37.9036C32.5543 38.791 32.411 39.9518 31.5556 40.6178C30.7032 41.2813 29.6687 40.9999 28.9395 39.8521Z" fill="#27272a"></path><path d="M16.8066 15.4056C16.0342 16.5504 14.9963 16.8004 14.1835 16.092C13.4784 15.4774 13.26 14.4581 13.6724 13.7066C14.1466 12.8425 15.0574 12.49 15.8805 12.8519C16.7743 13.245 17.137 14.194 16.8066 15.4056Z" fill="#27272a"></path><path d="M31.1509 16.3375C30.1057 16.6049 29.3401 16.2528 28.9442 15.3706C28.6171 14.6415 28.8137 13.662 29.3853 13.173C30.0608 12.595 30.9343 12.5787 31.625 13.1074C32.5076 13.7831 32.6434 15.6427 31.1509 16.3375Z" fill="#27272a"></path><path d="M23.8285 16.185C23.0526 16.6454 22.3419 16.5649 21.753 15.9944C21.2562 15.5132 21.0142 14.8894 21.2336 14.1138C21.4644 13.2977 21.944 12.8264 22.7131 12.7322C23.4849 12.6377 24.0886 12.9794 24.4473 13.7263C24.8018 14.4644 24.7343 15.1759 24.2282 15.8185C24.1291 15.9443 23.9979 16.0411 23.8285 16.185Z" fill="#27272a"></path><path d="M42.9881 23.5403C42.3175 23.9201 41.8713 23.6808 41.6163 23.0486C41.4264 22.5777 41.6094 22.161 42.0129 21.9107C42.501 21.6079 42.9358 21.7817 43.2333 22.2452C43.526 22.7013 43.4171 23.1424 42.9881 23.5403Z" fill="#27272a"></path><path d="M11.6593 22.0783C12.0706 22.6445 11.9888 23.1205 11.5301 23.4958C11.1341 23.8197 10.7168 23.8072 10.3523 23.3946C10.0224 23.0211 9.97528 22.6123 10.2631 22.1983C10.6503 21.6413 11.1196 21.6697 11.6593 22.0783Z" fill="#27272a"></path><path d="M42.5674 29.9785C43.1111 30.1262 43.3957 30.4603 43.3798 30.9956C43.3672 31.4167 43.1234 31.7223 42.7484 31.8505C42.3324 31.9928 41.9841 31.8181 41.7189 31.4709C41.265 30.8766 41.6183 30.2091 42.5674 29.9785Z" fill="#27272a"></path><path d="M29.6045 43.587C29.6913 43.1766 29.8839 42.9228 30.1888 42.7881C30.6684 42.5762 31.0769 42.7343 31.3253 43.1896C31.574 43.6456 31.5194 44.1165 31.0879 44.4412C30.6708 44.7551 30.2536 44.688 29.8876 44.3195C29.7127 44.1435 29.6315 43.9067 29.6045 43.587Z" fill="#27272a"></path><path d="M11.7811 30.5068C12.047 31.177 11.8043 31.6121 11.2944 31.8322C10.8458 32.0258 10.4159 31.8683 10.1727 31.3853C9.94517 30.9333 10.0572 30.5008 10.418 30.2014C10.9207 29.784 11.3786 29.9252 11.7811 30.5068Z" fill="#27272a"></path><path d="M22.2796 42.9407C22.8455 42.5325 23.313 42.6122 23.6703 43.1407C23.9241 43.5161 23.895 43.9238 23.5905 44.2732C23.2449 44.6697 22.8248 44.7502 22.409 44.4469C21.8669 44.0515 21.9688 43.5226 22.2796 42.9407Z" fill="#27272a"></path><path d="M23.8028 10.2146C23.5753 10.8057 23.2005 11.0543 22.6715 10.948C22.31 10.8754 22.0733 10.6254 22.0365 10.2089C21.9861 9.64038 22.1636 9.16881 22.7206 9.08712C23.4186 8.98476 23.7713 9.41701 23.8028 10.2146Z" fill="#27272a"></path><path d="M31.2784 10.5692C30.8101 11.128 30.3308 11.1324 29.8967 10.671C29.5491 10.3016 29.4786 9.8418 29.8664 9.42329C30.2437 9.01606 30.6771 8.92525 31.1086 9.30829C31.4752 9.6337 31.4875 10.0655 31.2784 10.5692Z" fill="#27272a"></path><path d="M70.3923 36.5L64.9818 17.5909H69.349L72.4789 30.7294H72.6359L76.089 17.5909H79.8284L83.2723 30.7571H83.4384L86.5684 17.5909H90.9356L85.5251 36.5H81.6288L78.0279 24.1371H77.8802L74.2886 36.5H70.3923ZM97.1057 36.777C95.6715 36.777 94.4312 36.4723 93.3848 35.8629C92.3446 35.2474 91.5413 34.3918 90.975 33.2962C90.4087 32.1944 90.1256 30.9171 90.1256 29.4645C90.1256 27.9995 90.4087 26.7192 90.975 25.6236C91.5413 24.5218 92.3446 23.6662 93.3848 23.0568C94.4312 22.4413 95.6715 22.1335 97.1057 22.1335C98.5399 22.1335 99.7771 22.4413 100.817 23.0568C101.864 23.6662 102.67 24.5218 103.236 25.6236C103.803 26.7192 104.086 27.9995 104.086 29.4645C104.086 30.9171 103.803 32.1944 103.236 33.2962C102.67 34.3918 101.864 35.2474 100.817 35.8629C99.7771 36.4723 98.5399 36.777 97.1057 36.777ZM97.1242 33.7301C97.7766 33.7301 98.3214 33.5455 98.7584 33.1761C99.1954 32.8007 99.5247 32.2898 99.7463 31.6435C99.9741 30.9972 100.088 30.2616 100.088 29.4368C100.088 28.612 99.9741 27.8764 99.7463 27.2301C99.5247 26.5838 99.1954 26.0729 98.7584 25.6974C98.3214 25.322 97.7766 25.1342 97.1242 25.1342C96.4656 25.1342 95.9116 25.322 95.4622 25.6974C95.0191 26.0729 94.6836 26.5838 94.4559 27.2301C94.2343 27.8764 94.1235 28.612 94.1235 29.4368C94.1235 30.2616 94.2343 30.9972 94.4559 31.6435C94.6836 32.2898 95.0191 32.8007 95.4622 33.1761C95.9116 33.5455 96.4656 33.7301 97.1242 33.7301ZM109.797 28.3011V36.5H105.863V22.3182H109.612V24.8203H109.778C110.092 23.9955 110.618 23.343 111.357 22.8629C112.096 22.3767 112.991 22.1335 114.044 22.1335C115.029 22.1335 115.887 22.349 116.62 22.7798C117.352 23.2107 117.922 23.8262 118.328 24.6264C118.734 25.4205 118.937 26.3684 118.937 27.4702V36.5H115.004V28.1719C115.01 27.304 114.789 26.6269 114.339 26.1406C113.89 25.6482 113.271 25.402 112.483 25.402C111.954 25.402 111.486 25.5159 111.08 25.7436C110.68 25.9714 110.366 26.3037 110.138 26.7408C109.917 27.1716 109.803 27.6918 109.797 28.3011ZM126.483 36.7308C125.406 36.7308 124.43 36.4538 123.556 35.8999C122.688 35.3397 121.999 34.518 121.488 33.4347C120.983 32.3452 120.731 31.0095 120.731 29.4276C120.731 27.8026 120.993 26.4515 121.516 25.3743C122.039 24.291 122.734 23.4815 123.602 22.946C124.476 22.4044 125.434 22.1335 126.474 22.1335C127.268 22.1335 127.93 22.2689 128.459 22.5398C128.994 22.8045 129.425 23.1368 129.752 23.5369C130.084 23.9309 130.336 24.3187 130.509 24.7003H130.629V17.5909H134.553V36.5H130.675V34.2287H130.509C130.324 34.6226 130.062 35.0135 129.724 35.4013C129.391 35.7829 128.957 36.0999 128.422 36.3523C127.893 36.6046 127.246 36.7308 126.483 36.7308ZM127.729 33.6009C128.363 33.6009 128.899 33.4285 129.336 33.0838C129.779 32.733 130.118 32.2436 130.352 31.6158C130.592 30.9879 130.712 30.2524 130.712 29.4091C130.712 28.5658 130.595 27.8333 130.361 27.2116C130.127 26.59 129.788 26.1098 129.345 25.7713C128.902 25.4328 128.363 25.2635 127.729 25.2635C127.083 25.2635 126.538 25.4389 126.095 25.7898C125.652 26.1406 125.317 26.6269 125.089 27.2486C124.861 27.8703 124.747 28.5904 124.747 29.4091C124.747 30.2339 124.861 30.9633 125.089 31.5973C125.323 32.2251 125.658 32.7176 126.095 33.0746C126.538 33.4254 127.083 33.6009 127.729 33.6009ZM143.47 36.777C142.011 36.777 140.755 36.4815 139.702 35.8906C138.656 35.2936 137.85 34.4503 137.283 33.3608C136.717 32.2652 136.434 30.9695 136.434 29.4737C136.434 28.0149 136.717 26.7346 137.283 25.6328C137.85 24.531 138.647 23.6723 139.675 23.0568C140.709 22.4413 141.921 22.1335 143.313 22.1335C144.248 22.1335 145.119 22.2843 145.926 22.5859C146.738 22.8814 147.446 23.3277 148.049 23.9247C148.658 24.5218 149.132 25.2727 149.471 26.1776C149.81 27.0762 149.979 28.1288 149.979 29.3352V30.4155H138.004V27.978H146.276C146.276 27.4117 146.153 26.91 145.907 26.473C145.661 26.036 145.319 25.6944 144.882 25.4482C144.451 25.1958 143.95 25.0696 143.377 25.0696C142.78 25.0696 142.251 25.2081 141.789 25.4851C141.334 25.7559 140.977 26.1222 140.718 26.5838C140.46 27.0393 140.327 27.5471 140.321 28.1072V30.4247C140.321 31.1264 140.45 31.7327 140.709 32.2436C140.974 32.7545 141.346 33.1484 141.826 33.4254C142.306 33.7024 142.876 33.8409 143.534 33.8409C143.971 33.8409 144.371 33.7794 144.734 33.6562C145.098 33.5331 145.408 33.3485 145.667 33.1023C145.926 32.8561 146.122 32.5545 146.258 32.1974L149.896 32.4375C149.711 33.3116 149.332 34.0748 148.76 34.7273C148.194 35.3736 147.461 35.8783 146.563 36.2415C145.67 36.5985 144.639 36.777 143.47 36.777ZM151.766 36.5V22.3182H155.579V24.7926H155.726C155.985 23.9124 156.419 23.2476 157.028 22.7983C157.638 22.3428 158.339 22.1151 159.133 22.1151C159.33 22.1151 159.543 22.1274 159.771 22.152C159.998 22.1766 160.198 22.2105 160.371 22.2536V25.7436C160.186 25.6882 159.931 25.639 159.604 25.5959C159.278 25.5528 158.98 25.5312 158.709 25.5312C158.13 25.5312 157.613 25.6574 157.158 25.9098C156.708 26.156 156.351 26.5007 156.087 26.9439C155.828 27.3871 155.699 27.898 155.699 28.4766V36.5H151.766ZM161.624 41.8182V22.3182H165.502V24.7003H165.677C165.85 24.3187 166.099 23.9309 166.425 23.5369C166.758 23.1368 167.189 22.8045 167.718 22.5398C168.253 22.2689 168.918 22.1335 169.712 22.1335C170.746 22.1335 171.7 22.4044 172.574 22.946C173.449 23.4815 174.147 24.291 174.67 25.3743C175.194 26.4515 175.455 27.8026 175.455 29.4276C175.455 31.0095 175.2 32.3452 174.689 33.4347C174.184 34.518 173.495 35.3397 172.621 35.8999C171.753 36.4538 170.78 36.7308 169.703 36.7308C168.94 36.7308 168.29 36.6046 167.755 36.3523C167.226 36.0999 166.792 35.7829 166.453 35.4013C166.115 35.0135 165.856 34.6226 165.677 34.2287H165.557V41.8182H161.624ZM165.474 29.4091C165.474 30.2524 165.591 30.9879 165.825 31.6158C166.059 32.2436 166.398 32.733 166.841 33.0838C167.284 33.4285 167.823 33.6009 168.457 33.6009C169.097 33.6009 169.638 33.4254 170.082 33.0746C170.525 32.7176 170.86 32.2251 171.088 31.5973C171.322 30.9633 171.439 30.2339 171.439 29.4091C171.439 28.5904 171.325 27.8703 171.097 27.2486C170.869 26.6269 170.534 26.1406 170.091 25.7898C169.648 25.4389 169.103 25.2635 168.457 25.2635C167.816 25.2635 167.275 25.4328 166.832 25.7713C166.395 26.1098 166.059 26.59 165.825 27.2116C165.591 27.8333 165.474 28.5658 165.474 29.4091ZM181.231 17.5909V36.5H177.297V17.5909H181.231ZM187.645 36.7678C186.741 36.7678 185.934 36.6108 185.226 36.2969C184.518 35.9768 183.958 35.5059 183.546 34.8842C183.14 34.2564 182.937 33.4747 182.937 32.5391C182.937 31.7512 183.081 31.0895 183.371 30.554C183.66 30.0185 184.054 29.5876 184.552 29.2614C185.051 28.9351 185.617 28.6889 186.251 28.5227C186.891 28.3565 187.562 28.2396 188.264 28.1719C189.089 28.0857 189.754 28.0057 190.258 27.9318C190.763 27.8518 191.129 27.7348 191.357 27.581C191.585 27.4271 191.699 27.1993 191.699 26.8977V26.8423C191.699 26.2576 191.514 25.8052 191.145 25.4851C190.781 25.165 190.264 25.005 189.594 25.005C188.886 25.005 188.322 25.1619 187.904 25.4759C187.485 25.7836 187.208 26.1714 187.073 26.6392L183.435 26.3438C183.62 25.482 183.983 24.7372 184.525 24.1094C185.066 23.4754 185.765 22.9891 186.621 22.6506C187.482 22.3059 188.479 22.1335 189.612 22.1335C190.4 22.1335 191.154 22.2259 191.874 22.4105C192.6 22.5952 193.244 22.8814 193.804 23.2692C194.37 23.657 194.816 24.1555 195.143 24.7649C195.469 25.3681 195.632 26.0914 195.632 26.9347V36.5H191.902V34.5334H191.791C191.563 34.9766 191.259 35.3674 190.877 35.706C190.495 36.0384 190.037 36.3 189.501 36.4908C188.966 36.6754 188.347 36.7678 187.645 36.7678ZM188.772 34.0533C189.35 34.0533 189.861 33.9394 190.304 33.7116C190.748 33.4777 191.095 33.1638 191.348 32.7699C191.6 32.3759 191.726 31.9297 191.726 31.4311V29.9261C191.603 30.0062 191.434 30.08 191.219 30.1477C191.009 30.2093 190.772 30.2678 190.508 30.3232C190.243 30.3724 189.978 30.4186 189.714 30.4616C189.449 30.4986 189.209 30.5324 188.993 30.5632C188.532 30.6309 188.129 30.7386 187.784 30.8864C187.439 31.0341 187.171 31.2341 186.981 31.4865C186.79 31.7327 186.694 32.0405 186.694 32.4098C186.694 32.9453 186.888 33.3546 187.276 33.6378C187.67 33.9148 188.169 34.0533 188.772 34.0533ZM201.837 28.3011V36.5H197.903V22.3182H201.652V24.8203H201.818C202.132 23.9955 202.658 23.343 203.397 22.8629C204.136 22.3767 205.031 22.1335 206.084 22.1335C207.069 22.1335 207.927 22.349 208.66 22.7798C209.392 23.2107 209.962 23.8262 210.368 24.6264C210.774 25.4205 210.977 26.3684 210.977 27.4702V36.5H207.044V28.1719C207.05 27.304 206.829 26.6269 206.379 26.1406C205.93 25.6482 205.311 25.402 204.523 25.402C203.994 25.402 203.526 25.5159 203.12 25.7436C202.72 25.9714 202.406 26.3037 202.178 26.7408C201.957 27.1716 201.843 27.6918 201.837 28.3011Z" fill="#27272a"></path></svg>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
