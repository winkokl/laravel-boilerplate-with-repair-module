@extends('mobile.layouts.master')

@section('title', __('Padesar'))

@section('header')
    <!-- Header -->
    <header class="header">
		<div class="main-bar">
			<div class="container">
				<div class="header-content">
					<div class="left-content">
						<a href="javascript:void(0);" class="back-btn">
							<svg height="512" viewBox="0 0 486.65 486.65" width="512"><path d="m202.114 444.648c-8.01-.114-15.65-3.388-21.257-9.11l-171.875-171.572c-11.907-11.81-11.986-31.037-.176-42.945.058-.059.117-.118.176-.176l171.876-171.571c12.738-10.909 31.908-9.426 42.817 3.313 9.736 11.369 9.736 28.136 0 39.504l-150.315 150.315 151.833 150.315c11.774 11.844 11.774 30.973 0 42.817-6.045 6.184-14.439 9.498-23.079 9.11z"/><path d="m456.283 272.773h-425.133c-16.771 0-30.367-13.596-30.367-30.367s13.596-30.367 30.367-30.367h425.133c16.771 0 30.367 13.596 30.367 30.367s-13.596 30.367-30.367 30.367z"/>
							</svg>
						</a>
						<h5 class="title mb-0 text-nowrap">Search Product</h5>
					</div>
					<div class="mid-content">
					</div>
					<div class="right-content">
					</div>
				</div>
			</div>
		</div>
	</header>
    <!-- Header End -->
@endsection
@section('content')
<!-- Page Content -->
<div class="page-content">
    <div class="container">
        <div class="serach-area">
            <div class="d-flex align-items-center mb-4">
                <div class="w-100">
                    <div class="mb-0 input-group input-group-icon">
                        <div class="input-group-text">
                            <div class="input-icon search-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.9395 1.9313C5.98074 1.9313 1.94141 5.97063 1.94141 10.9294C1.94141 15.8881 5.98074 19.9353 10.9395 19.9353C13.0575 19.9353 15.0054 19.193 16.5449 17.9606L20.293 21.7067C20.4821 21.888 20.7347 21.988 20.9967 21.9854C21.2587 21.9827 21.5093 21.8775 21.6947 21.6924C21.8801 21.5073 21.9856 21.2569 21.9886 20.9949C21.9917 20.7329 21.892 20.4802 21.7109 20.2908L17.9629 16.5427C19.1963 15.0008 19.9395 13.0498 19.9395 10.9294C19.9395 5.97063 15.8982 1.9313 10.9395 1.9313ZM10.9395 3.93134C14.8173 3.93134 17.9375 7.05153 17.9375 10.9294C17.9375 14.8072 14.8173 17.9352 10.9395 17.9352C7.06162 17.9352 3.94141 14.8072 3.94141 10.9294C3.94141 7.05153 7.06162 3.93134 10.9395 3.93134Z" fill="#7D8FAB"/>
                                </svg>
                            </div>
                        </div>
                        <input type="search" class="form-control main-in px-0 bs-0" placeholder="Strawberry">
                        <span class="input-group-text">
                            <a href="javascript:void(0);" class="input-icon search-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0212 3H3.97868C3.57142 3.00032 3.17301 3.11885 2.8318 3.34119C2.49059 3.56353 2.22125 3.88013 2.05647 4.25257C1.89169 4.62501 1.83856 5.03727 1.90352 5.43931C1.96848 5.84136 2.14875 6.21591 2.42243 6.5175L9.37493 14.1638V21.375C9.37499 21.516 9.41478 21.6541 9.48973 21.7734C9.56468 21.8928 9.67175 21.9887 9.79868 22.05C9.90012 22.1 10.0118 22.1257 10.1249 22.125C10.2954 22.1249 10.4607 22.0667 10.5937 21.96L11.9999 20.835L14.3437 18.96C14.4314 18.8898 14.5022 18.8008 14.5509 18.6995C14.5996 18.5982 14.6249 18.4874 14.6249 18.375V14.1638L21.5774 6.5175C21.8511 6.21591 22.0314 5.84136 22.0963 5.43931C22.1613 5.03727 22.1082 4.62501 21.9434 4.25257C21.7786 3.88013 21.5093 3.56353 21.1681 3.34119C20.8269 3.11885 20.4284 3.00032 20.0212 3V3Z" fill="#7D8FAB"/>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="title-bar mt-0">
                <span class="title mb-0 font-18">Recent Search</span>
                <a class="font-14 font-w500 text-accent all-close" href="javascript:void(0);">Clear All</a>
            </div>
            <ul class="recent-search-list">
                <li>
                    <div class="d-flex align-items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 11C21.7348 11 21.4804 11.1054 21.2929 11.2929C21.1053 11.4804 21 11.7348 21 12C21.0041 14.046 20.3124 16.0325 19.0384 17.6334C17.7645 19.2344 15.984 20.3545 13.9894 20.8099C11.9948 21.2654 9.90455 21.029 8.062 20.1397C6.21945 19.2503 4.73407 17.7608 3.8498 15.9159C2.96552 14.0709 2.7349 11.98 3.19581 9.98665C3.65672 7.99328 4.78176 6.21589 6.38618 4.94634C7.99061 3.67679 9.97905 2.99055 12.025 3.00031C14.0709 3.01006 16.0527 3.71523 17.645 5.00002H16C15.7348 5.00002 15.4804 5.10537 15.2929 5.29291C15.1053 5.48044 15 5.7348 15 6.00002C15 6.26523 15.1053 6.51959 15.2929 6.70712C15.4804 6.89466 15.7348 7.00002 16 7.00002H20C20.2652 7.00002 20.5195 6.89466 20.7071 6.70712C20.8946 6.51959 21 6.26523 21 6.00002V2.00002C21 1.7348 20.8946 1.48044 20.7071 1.29291C20.5195 1.10537 20.2652 1.00002 20 1.00002C19.7348 1.00002 19.4804 1.10537 19.2929 1.29291C19.1053 1.48044 19 1.7348 19 2.00002V3.53102C17.0727 1.94258 14.6617 1.05806 12.1644 1.02319C9.66714 0.988309 7.23246 1.80516 5.26153 3.33915C3.2906 4.87314 1.901 7.03275 1.32169 9.46217C0.742374 11.8916 1.00791 14.4459 2.07453 16.7042C3.14116 18.9625 4.94525 20.7901 7.18956 21.8859C9.43387 22.9817 11.9845 23.2803 14.4212 22.7325C16.858 22.1847 19.0354 20.8232 20.5948 18.8723C22.1542 16.9214 23.0025 14.4976 23 12C23 11.7348 22.8946 11.4804 22.7071 11.2929C22.5195 11.1054 22.2652 11 22 11Z" fill="#7D8FAB"/>
                            <path d="M12 5.00002C11.7348 5.00002 11.4804 5.10537 11.2929 5.29291C11.1054 5.48045 11 5.7348 11 6.00002V12C11.0001 12.2652 11.1055 12.5195 11.293 12.707L14.293 15.707C14.4816 15.8892 14.7342 15.99 14.9964 15.9877C15.2586 15.9854 15.5094 15.8803 15.6948 15.6948C15.8802 15.5094 15.9854 15.2586 15.9877 14.9964C15.99 14.7342 15.8892 14.4816 15.707 14.293L13 11.586V6.00002C13 5.7348 12.8946 5.48045 12.7071 5.29291C12.5196 5.10537 12.2652 5.00002 12 5.00002Z" fill="#7D8FAB"/>
                        </svg>
                        <h5 class="sub-title ms-2 mb-0">Tomatoes</h5>
                    </div>
                    <a href="javascript:void(0);" class="close-1 remove-tag"><i class="fa-solid fa-xmark cross"></i></a>
                </li>
                <li>
                    <div class="d-flex align-items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 11C21.7348 11 21.4804 11.1054 21.2929 11.2929C21.1053 11.4804 21 11.7348 21 12C21.0041 14.046 20.3124 16.0325 19.0384 17.6334C17.7645 19.2344 15.984 20.3545 13.9894 20.8099C11.9948 21.2654 9.90455 21.029 8.062 20.1397C6.21945 19.2503 4.73407 17.7608 3.8498 15.9159C2.96552 14.0709 2.7349 11.98 3.19581 9.98665C3.65672 7.99328 4.78176 6.21589 6.38618 4.94634C7.99061 3.67679 9.97905 2.99055 12.025 3.00031C14.0709 3.01006 16.0527 3.71523 17.645 5.00002H16C15.7348 5.00002 15.4804 5.10537 15.2929 5.29291C15.1053 5.48044 15 5.7348 15 6.00002C15 6.26523 15.1053 6.51959 15.2929 6.70712C15.4804 6.89466 15.7348 7.00002 16 7.00002H20C20.2652 7.00002 20.5195 6.89466 20.7071 6.70712C20.8946 6.51959 21 6.26523 21 6.00002V2.00002C21 1.7348 20.8946 1.48044 20.7071 1.29291C20.5195 1.10537 20.2652 1.00002 20 1.00002C19.7348 1.00002 19.4804 1.10537 19.2929 1.29291C19.1053 1.48044 19 1.7348 19 2.00002V3.53102C17.0727 1.94258 14.6617 1.05806 12.1644 1.02319C9.66714 0.988309 7.23246 1.80516 5.26153 3.33915C3.2906 4.87314 1.901 7.03275 1.32169 9.46217C0.742374 11.8916 1.00791 14.4459 2.07453 16.7042C3.14116 18.9625 4.94525 20.7901 7.18956 21.8859C9.43387 22.9817 11.9845 23.2803 14.4212 22.7325C16.858 22.1847 19.0354 20.8232 20.5948 18.8723C22.1542 16.9214 23.0025 14.4976 23 12C23 11.7348 22.8946 11.4804 22.7071 11.2929C22.5195 11.1054 22.2652 11 22 11Z" fill="#7D8FAB"/>
                            <path d="M12 5.00002C11.7348 5.00002 11.4804 5.10537 11.2929 5.29291C11.1054 5.48045 11 5.7348 11 6.00002V12C11.0001 12.2652 11.1055 12.5195 11.293 12.707L14.293 15.707C14.4816 15.8892 14.7342 15.99 14.9964 15.9877C15.2586 15.9854 15.5094 15.8803 15.6948 15.6948C15.8802 15.5094 15.9854 15.2586 15.9877 14.9964C15.99 14.7342 15.8892 14.4816 15.707 14.293L13 11.586V6.00002C13 5.7348 12.8946 5.48045 12.7071 5.29291C12.5196 5.10537 12.2652 5.00002 12 5.00002Z" fill="#7D8FAB"/>
                        </svg>
                        <h5 class="sub-title ms-2 mb-0">Local Fresh Spinach</h5>
                    </div>
                    <a href="javascript:void(0);" class="close-1 remove-tag"><i class="fa-solid fa-xmark"></i></a>
                </li>
                <li>
                    <div class="d-flex align-items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 11C21.7348 11 21.4804 11.1054 21.2929 11.2929C21.1053 11.4804 21 11.7348 21 12C21.0041 14.046 20.3124 16.0325 19.0384 17.6334C17.7645 19.2344 15.984 20.3545 13.9894 20.8099C11.9948 21.2654 9.90455 21.029 8.062 20.1397C6.21945 19.2503 4.73407 17.7608 3.8498 15.9159C2.96552 14.0709 2.7349 11.98 3.19581 9.98665C3.65672 7.99328 4.78176 6.21589 6.38618 4.94634C7.99061 3.67679 9.97905 2.99055 12.025 3.00031C14.0709 3.01006 16.0527 3.71523 17.645 5.00002H16C15.7348 5.00002 15.4804 5.10537 15.2929 5.29291C15.1053 5.48044 15 5.7348 15 6.00002C15 6.26523 15.1053 6.51959 15.2929 6.70712C15.4804 6.89466 15.7348 7.00002 16 7.00002H20C20.2652 7.00002 20.5195 6.89466 20.7071 6.70712C20.8946 6.51959 21 6.26523 21 6.00002V2.00002C21 1.7348 20.8946 1.48044 20.7071 1.29291C20.5195 1.10537 20.2652 1.00002 20 1.00002C19.7348 1.00002 19.4804 1.10537 19.2929 1.29291C19.1053 1.48044 19 1.7348 19 2.00002V3.53102C17.0727 1.94258 14.6617 1.05806 12.1644 1.02319C9.66714 0.988309 7.23246 1.80516 5.26153 3.33915C3.2906 4.87314 1.901 7.03275 1.32169 9.46217C0.742374 11.8916 1.00791 14.4459 2.07453 16.7042C3.14116 18.9625 4.94525 20.7901 7.18956 21.8859C9.43387 22.9817 11.9845 23.2803 14.4212 22.7325C16.858 22.1847 19.0354 20.8232 20.5948 18.8723C22.1542 16.9214 23.0025 14.4976 23 12C23 11.7348 22.8946 11.4804 22.7071 11.2929C22.5195 11.1054 22.2652 11 22 11Z" fill="#7D8FAB"/>
                            <path d="M12 5.00002C11.7348 5.00002 11.4804 5.10537 11.2929 5.29291C11.1054 5.48045 11 5.7348 11 6.00002V12C11.0001 12.2652 11.1055 12.5195 11.293 12.707L14.293 15.707C14.4816 15.8892 14.7342 15.99 14.9964 15.9877C15.2586 15.9854 15.5094 15.8803 15.6948 15.6948C15.8802 15.5094 15.9854 15.2586 15.9877 14.9964C15.99 14.7342 15.8892 14.4816 15.707 14.293L13 11.586V6.00002C13 5.7348 12.8946 5.48045 12.7071 5.29291C12.5196 5.10537 12.2652 5.00002 12 5.00002Z" fill="#7D8FAB"/>
                        </svg>
                        <h5 class="sub-title ms-2 mb-0">Fresh Orange</h5>
                    </div>
                    <a href="javascript:void(0);" class="close-1 remove-tag"><i class="fa-solid fa-xmark"></i></a>
                </li>
            </ul>
            <!-- Product List -->
            <div class="item-list style-2">
                <div class="saprater"></div>
                <div class="title-bar">
                    <span class="title mb-0 font-18">Search Results</span>
                    <select class="form-select dz-form-select style-2" aria-label="Default select example">
                        <option selected>Newest</option>
                        <option value="1">One</option>
                        <option value="2">Three</option>
                    </select>
                </div>
                <ul>
                    <li>
                        <div class="item-content">
                            <div class="item-media media media-95"><img src="{{asset('mobile/assets/images/food/small/6.png')}}" alt="logo">
                                <a href="javascript:void(0);" class="item-bookmark icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.785 2.04751C15.9489 2.04694 15.1209 2.21163 14.3486 2.53212C13.5764 2.85261 12.8751 3.32258 12.285 3.91501L12 4.18501L11.73 3.91501C11.1492 3.2681 10.4424 2.74652 9.65306 2.3822C8.86367 2.01787 8.00824 1.81847 7.13912 1.79618C6.27 1.7739 5.40547 1.9292 4.59845 2.25259C3.79143 2.57599 3.05889 3.06066 2.44566 3.67695C1.83243 4.29325 1.35142 5.02819 1.03206 5.83682C0.712696 6.64544 0.561704 7.51073 0.588323 8.37973C0.614942 9.24873 0.818613 10.1032 1.18687 10.8907C1.55513 11.6783 2.08022 12.3824 2.73002 12.96L12 22.2675L21.3075 12.96C22.2015 12.0677 22.8109 10.9304 23.0589 9.6919C23.3068 8.45338 23.1822 7.16915 22.7006 6.00144C22.2191 4.83373 21.4023 3.83492 20.3534 3.13118C19.3045 2.42744 18.0706 2.05034 16.8075 2.04751H16.785Z" fill="white"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <h5 class="item-title sub-title"><a href="{{route('frontend.product_detail')}}">Fresh Strawberry</a></h5>
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 mb-0">$ 5.0</h6>
                                        <del class="off-text"><h6 class="mb-0">$ 8.9</h6></del>
                                    </div>
                                    <!-- <div class="item-subtitle">Coffe, Milk</div> -->
                                </div>
                                <div class="item-footer">
                                    <div class="d-flex align-items-center">
                                        <svg class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_361_453)">
                                            <path d="M14.6666 0.000106812H9.12485C8.75825 0.000106812 8.24587 0.212488 7.98685 0.471314L0.389089 8.06903C-0.129696 8.58723 -0.129696 9.43684 0.389089 9.95441L6.04624 15.6114C6.56385 16.1296 7.41263 16.1296 7.93103 15.6108L15.5288 8.01423C15.7876 7.75544 16 7.24224 16 6.87642V1.3335C16 0.600298 15.3998 0.000106812 14.6666 0.000106812ZM11.9998 5.33347C11.2634 5.33347 10.6664 4.73585 10.6664 4.00008C10.6664 3.26309 11.2634 2.66669 11.9998 2.66669C12.7362 2.66669 13.3334 3.26309 13.3334 4.00008C13.3334 4.73585 12.7362 5.33347 11.9998 5.33347Z" fill="#C29C1D"/>
                                            </g>
                                            <defs>
                                            <clipPath >
                                            <rect width="16" height="16" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                        <h6 class="font-12 text-accent mb-0 font-w400">Disc. 10%Off</h6>
                                    </div>
                                    <a href="{{route('frontend.product_detail')}}" class="cart-btn">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g >
                                            <path d="M18.1776 17.8443C16.6362 17.8428 15.3855 19.0912 15.3839 20.6326C15.3824 22.1739 16.6308 23.4247 18.1722 23.4262C19.7136 23.4277 20.9643 22.1794 20.9659 20.638V20.6353C20.9644 19.0955 19.7173 17.8473 18.1776 17.8443Z" fill="white"/>
                                            <path d="M23.1278 4.47972C23.061 4.46679 22.9932 4.46022 22.9251 4.46011H5.93181L5.66267 2.65957C5.49499 1.4638 4.47216 0.574121 3.26466 0.573753H1.07655C0.481978 0.573753 0 1.05573 0 1.6503C0 2.24488 0.481978 2.72686 1.07655 2.72686H3.26734C3.40423 2.72586 3.52008 2.82778 3.53648 2.96372L5.19436 14.3267C5.42166 15.7706 6.66363 16.8358 8.12528 16.8404H19.3241C20.7313 16.8423 21.9454 15.8533 22.2281 14.4747L23.9802 5.7412C24.0931 5.15745 23.7115 4.59268 23.1278 4.47972Z" fill="white"/>
                                            <path d="M11.3405 20.5158C11.2749 19.0196 10.0401 17.8418 8.54246 17.847C7.00233 17.9092 5.80425 19.2082 5.86648 20.7484C5.9262 22.2262 7.12833 23.4007 8.60707 23.4262H8.67435C10.2143 23.3587 11.4079 22.0557 11.3405 20.5158Z" fill="white"/>
                                            </g>
                                            <defs>
                                            <clipPath >
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media media media-95"><img src="{{asset('mobile/assets/images/food/small/7.png')}}" alt="logo">
                                <a href="javascript:void(0);" class="item-bookmark icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.785 2.04751C15.9489 2.04694 15.1209 2.21163 14.3486 2.53212C13.5764 2.85261 12.8751 3.32258 12.285 3.91501L12 4.18501L11.73 3.91501C11.1492 3.2681 10.4424 2.74652 9.65306 2.3822C8.86367 2.01787 8.00824 1.81847 7.13912 1.79618C6.27 1.7739 5.40547 1.9292 4.59845 2.25259C3.79143 2.57599 3.05889 3.06066 2.44566 3.67695C1.83243 4.29325 1.35142 5.02819 1.03206 5.83682C0.712696 6.64544 0.561704 7.51073 0.588323 8.37973C0.614942 9.24873 0.818613 10.1032 1.18687 10.8907C1.55513 11.6783 2.08022 12.3824 2.73002 12.96L12 22.2675L21.3075 12.96C22.2015 12.0677 22.8109 10.9304 23.0589 9.6919C23.3068 8.45338 23.1822 7.16915 22.7006 6.00144C22.2191 4.83373 21.4023 3.83492 20.3534 3.13118C19.3045 2.42744 18.0706 2.05034 16.8075 2.04751H16.785Z" fill="white"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <h5 class="item-title sub-title"><a href="{{route('frontend.product_detail')}}">Black Grapes</a></h5>
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 mb-0">$ 5.0</h6>
                                        <del class="off-text"><h6 class="mb-0">$ 8.9</h6></del>
                                    </div>
                                    <!-- <div class="item-subtitle">Coffe, Milk</div> -->
                                </div>
                                <div class="item-footer">
                                    <div class="d-flex align-items-center">
                                        <svg class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_361_453)">
                                            <path d="M14.6666 0.000106812H9.12485C8.75825 0.000106812 8.24587 0.212488 7.98685 0.471314L0.389089 8.06903C-0.129696 8.58723 -0.129696 9.43684 0.389089 9.95441L6.04624 15.6114C6.56385 16.1296 7.41263 16.1296 7.93103 15.6108L15.5288 8.01423C15.7876 7.75544 16 7.24224 16 6.87642V1.3335C16 0.600298 15.3998 0.000106812 14.6666 0.000106812ZM11.9998 5.33347C11.2634 5.33347 10.6664 4.73585 10.6664 4.00008C10.6664 3.26309 11.2634 2.66669 11.9998 2.66669C12.7362 2.66669 13.3334 3.26309 13.3334 4.00008C13.3334 4.73585 12.7362 5.33347 11.9998 5.33347Z" fill="#C29C1D"/>
                                            </g>
                                            <defs>
                                            <clipPath >
                                            <rect width="16" height="16" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                        <h6 class="font-12 text-accent mb-0 font-w400">Disc. 10%Off</h6>
                                    </div>
                                    <a href="{{route('frontend.product_detail')}}" class="cart-btn">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g >
                                            <path d="M18.1776 17.8443C16.6362 17.8428 15.3855 19.0912 15.3839 20.6326C15.3824 22.1739 16.6308 23.4247 18.1722 23.4262C19.7136 23.4277 20.9643 22.1794 20.9659 20.638V20.6353C20.9644 19.0955 19.7173 17.8473 18.1776 17.8443Z" fill="white"/>
                                            <path d="M23.1278 4.47972C23.061 4.46679 22.9932 4.46022 22.9251 4.46011H5.93181L5.66267 2.65957C5.49499 1.4638 4.47216 0.574121 3.26466 0.573753H1.07655C0.481978 0.573753 0 1.05573 0 1.6503C0 2.24488 0.481978 2.72686 1.07655 2.72686H3.26734C3.40423 2.72586 3.52008 2.82778 3.53648 2.96372L5.19436 14.3267C5.42166 15.7706 6.66363 16.8358 8.12528 16.8404H19.3241C20.7313 16.8423 21.9454 15.8533 22.2281 14.4747L23.9802 5.7412C24.0931 5.15745 23.7115 4.59268 23.1278 4.47972Z" fill="white"/>
                                            <path d="M11.3405 20.5158C11.2749 19.0196 10.0401 17.8418 8.54246 17.847C7.00233 17.9092 5.80425 19.2082 5.86648 20.7484C5.9262 22.2262 7.12833 23.4007 8.60707 23.4262H8.67435C10.2143 23.3587 11.4079 22.0557 11.3405 20.5158Z" fill="white"/>
                                            </g>
                                            <defs>
                                            <clipPath >
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media media media-95"><img src="{{asset('mobile/assets/images/food/small/8.png')}}" alt="logo">
                                <a href="javascript:void(0);" class="item-bookmark active icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.785 2.04751C15.9489 2.04694 15.1209 2.21163 14.3486 2.53212C13.5764 2.85261 12.8751 3.32258 12.285 3.91501L12 4.18501L11.73 3.91501C11.1492 3.2681 10.4424 2.74652 9.65306 2.3822C8.86367 2.01787 8.00824 1.81847 7.13912 1.79618C6.27 1.7739 5.40547 1.9292 4.59845 2.25259C3.79143 2.57599 3.05889 3.06066 2.44566 3.67695C1.83243 4.29325 1.35142 5.02819 1.03206 5.83682C0.712696 6.64544 0.561704 7.51073 0.588323 8.37973C0.614942 9.24873 0.818613 10.1032 1.18687 10.8907C1.55513 11.6783 2.08022 12.3824 2.73002 12.96L12 22.2675L21.3075 12.96C22.2015 12.0677 22.8109 10.9304 23.0589 9.6919C23.3068 8.45338 23.1822 7.16915 22.7006 6.00144C22.2191 4.83373 21.4023 3.83492 20.3534 3.13118C19.3045 2.42744 18.0706 2.05034 16.8075 2.04751H16.785Z" fill="white"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <h5 class="item-title sub-title"><a href="{{route('frontend.product_detail')}}">Fresh Watermelon</a></h5>
                                    <div class="d-flex align-items-center">
                                        <h6 class="me-2 mb-0">$ 5.0</h6>
                                        <del class="off-text"><h6 class="mb-0">$ 8.9</h6></del>
                                    </div>
                                    <!-- <div class="item-subtitle">Coffe, Milk</div> -->
                                </div>
                                <div class="item-footer">
                                    <div class="d-flex align-items-center">
                                        <svg class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_361_453)">
                                            <path d="M14.6666 0.000106812H9.12485C8.75825 0.000106812 8.24587 0.212488 7.98685 0.471314L0.389089 8.06903C-0.129696 8.58723 -0.129696 9.43684 0.389089 9.95441L6.04624 15.6114C6.56385 16.1296 7.41263 16.1296 7.93103 15.6108L15.5288 8.01423C15.7876 7.75544 16 7.24224 16 6.87642V1.3335C16 0.600298 15.3998 0.000106812 14.6666 0.000106812ZM11.9998 5.33347C11.2634 5.33347 10.6664 4.73585 10.6664 4.00008C10.6664 3.26309 11.2634 2.66669 11.9998 2.66669C12.7362 2.66669 13.3334 3.26309 13.3334 4.00008C13.3334 4.73585 12.7362 5.33347 11.9998 5.33347Z" fill="#C29C1D"/>
                                            </g>
                                            <defs>
                                            <clipPath >
                                            <rect width="16" height="16" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                        <h6 class="font-12 text-accent mb-0 font-w400">Disc. 10%Off</h6>
                                    </div>
                                    <a href="{{route('frontend.product_detail')}}" class="cart-btn">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g >
                                            <path d="M18.1776 17.8443C16.6362 17.8428 15.3855 19.0912 15.3839 20.6326C15.3824 22.1739 16.6308 23.4247 18.1722 23.4262C19.7136 23.4277 20.9643 22.1794 20.9659 20.638V20.6353C20.9644 19.0955 19.7173 17.8473 18.1776 17.8443Z" fill="white"/>
                                            <path d="M23.1278 4.47972C23.061 4.46679 22.9932 4.46022 22.9251 4.46011H5.93181L5.66267 2.65957C5.49499 1.4638 4.47216 0.574121 3.26466 0.573753H1.07655C0.481978 0.573753 0 1.05573 0 1.6503C0 2.24488 0.481978 2.72686 1.07655 2.72686H3.26734C3.40423 2.72586 3.52008 2.82778 3.53648 2.96372L5.19436 14.3267C5.42166 15.7706 6.66363 16.8358 8.12528 16.8404H19.3241C20.7313 16.8423 21.9454 15.8533 22.2281 14.4747L23.9802 5.7412C24.0931 5.15745 23.7115 4.59268 23.1278 4.47972Z" fill="white"/>
                                            <path d="M11.3405 20.5158C11.2749 19.0196 10.0401 17.8418 8.54246 17.847C7.00233 17.9092 5.80425 19.2082 5.86648 20.7484C5.9262 22.2262 7.12833 23.4007 8.60707 23.4262H8.67435C10.2143 23.3587 11.4079 22.0557 11.3405 20.5158Z" fill="white"/>
                                            </g>
                                            <defs>
                                            <clipPath >
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Product List -->
        </div>
    </div>
</div>
<!-- Page Content End-->
@endsection
@section('footer')
    <!-- Theme Color Settings -->
	<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
        <div class="offcanvas-body small">
            <ul class="theme-color-settings">
                <li>
                    <input class="filled-in" id="primary_color_8" name="theme_color" type="radio" value="color-primary">
					<label for="primary_color_8"></label>
                    <span>Default</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_2" name="theme_color" type="radio" value="color-green">
					<label for="primary_color_2"></label>
                    <span>Green</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_3" name="theme_color" type="radio" value="color-blue">
					<label for="primary_color_3"></label>
                    <span>Blue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_4" name="theme_color" type="radio" value="color-pink">
					<label for="primary_color_4"></label>
                    <span>Pink</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_5" name="theme_color" type="radio" value="color-yellow">
					<label for="primary_color_5"></label>
                    <span>Yellow</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_6" name="theme_color" type="radio" value="color-orange">
					<label for="primary_color_6"></label>
                    <span>Orange</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_7" name="theme_color" type="radio" value="color-purple">
					<label for="primary_color_7"></label>
                    <span>Purple</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_1" name="theme_color" type="radio" value="color-red">
					<label for="primary_color_1"></label>
                    <span>Red</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_9" name="theme_color" type="radio" value="color-lightblue">
					<label for="primary_color_9"></label>
                    <span>Lightblue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_10" name="theme_color" type="radio" value="color-teal">
					<label for="primary_color_10"></label>
                    <span>Teal</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_11" name="theme_color" type="radio" value="color-lime">
					<label for="primary_color_11"></label>
                    <span>Lime</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_12" name="theme_color" type="radio" value="color-deeporange">
					<label for="primary_color_12"></label>
                    <span>Deeporange</span>
                </li>
            </ul>
        </div>
    </div>
	<!-- Theme Color Settings End -->

	<!-- FILTER -->
    <div class="offcanvas offcanvas-start be-0" tabindex="-1" id="offcanvasLeft">
        <div class="offcanvas-body container">
			<div class="filter-area">
				<div class="filter-head">
					<button type="button" class="me-2 btn-close p-0 text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.70632 20.9907C4.26501 21.0166 3.83099 20.8682 3.4958 20.5767C2.83473 19.904 2.83473 18.8175 3.4958 18.1447L17.971 3.50102C18.6586 2.85015 19.7375 2.88633 20.3809 3.5819C20.9627 4.2109 20.9966 5.17769 20.4603 5.84679L5.89977 20.5767C5.56889 20.864 5.14185 21.0121 4.70632 20.9907Z" fill="black"/>
							<path d="M19.1645 20.9907C18.7173 20.9888 18.2886 20.8092 17.971 20.4905L3.49574 5.84675C2.8833 5.12323 2.96656 4.03438 3.68176 3.41475C4.32008 2.86175 5.26149 2.86175 5.89976 3.41475L20.4603 18.0585C21.1477 18.7095 21.1832 19.801 20.5397 20.4964C20.5141 20.5241 20.4876 20.5508 20.4603 20.5767C20.1037 20.8904 19.6345 21.0403 19.1645 20.9907Z" fill="black"/>
						</svg>
					</button>
					<h2 class="mb-0 flex-1">Search Filters</h2>
					<h6 class="sub-title mb-0 text-accent">Reset</h6>
				</div>
				<div class="filter-content">
					<div class="title-bar">
						<h5 class="sub-title mb-0">Price Range</h5>
					</div>
					<div class="border-bottom d-flex justify-content-between align-items-center">
						<div class="mb-3 me-3 input-group input-group-icon">
							<input type="text" class="form-control" placeholder="Min">
						</div>
						<div class="mb-3 input-group input-group-icon">
							<input type="text" class="form-control" placeholder="Max">
						</div>
					</div>
					<div class="title-bar">
						<h5 class="sub-title">Star Ratings</h5>
					</div>
					<div class="border-bottom d-flex align-items-center pb-3">
						<div class="rating-stars">
							<ul id="stars">
								<li class="star" title="Poor" data-value="1">
									<i class="fa fa-star fa-fw"></i>
								</li>
								<li class="star" title="Fair" data-value="2">
									<i class="fa fa-star fa-fw"></i>
								</li>
								<li class="star" title="Good" data-value="3">
									<i class="fa fa-star fa-fw"></i>
								</li>
								<li class="star" title="Excellent" data-value="4">
									<i class="fa fa-star fa-fw"></i>
								</li>
								<li class="star" title="WOW!!!" data-value="5">
									<i class="fa fa-star fa-fw"></i>
								</li>
							</ul>
						</div>
						<h6 class="sub-title text-soft mb-0 ms-auto font-w500">4 Stars</h6>
					</div>
					<div class="title-bar">
						<h5 class="sub-title">Others</h5>
					</div>
					<div class="border-bottom pb-3">
						<ul class="d-flex align-items-center flex-wrap">
							<li class="w-50 pb-2 pe-2">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked>
									<label class="form-check-label" for="flexCheckChecked1">
										Discount
									</label>
								</div>
							</li>
							<li class="w-50 pb-2 pe-2">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
									<label class="form-check-label" for="flexCheckChecked2">
										Voucher
									</label>
								</div>
							</li>
							<li class="w-50 pb-2 pe-2">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3">
									<label class="form-check-label" for="flexCheckChecked3">
										Free Shipping
									</label>
								</div>
							</li>
							<li class="w-50 pb-2 pe-2">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" checked>
									<label class="form-check-label" for="flexCheckChecked4">
										Same Day Deliv.
									</label>
								</div>
							</li>
						</ul>
					</div>
					<div class="title-bar">
						<h5 class="sub-title">Categories</h5>
					</div>
					<div class="pb-3">
						<ul class="Categories">
							<li class="d-flex align-items-center pb-3">
								<svg class="me-3" width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.4375 7.59375C20.4375 5.37085 18.6292 3.5625 16.4062 3.5625C15.1646 3.5625 14.0526 4.1272 13.3125 5.0127C12.7648 4.35736 12.0132 3.87872 11.1562 3.67365V3.60938C11.1562 2.65302 11.9343 1.875 12.8906 1.875C13.4084 1.875 13.8281 1.45532 13.8281 0.9375C13.8281 0.419678 13.4084 0 12.8906 0C10.9005 0 9.28125 1.6192 9.28125 3.60938V3.67365C8.42432 3.87872 7.67267 4.35736 7.125 5.0127C6.38489 4.1272 5.27289 3.5625 4.03125 3.5625C1.80835 3.5625 0 5.37085 0 7.59375C0 9.71503 1.64722 11.4575 3.72949 11.6125C3.32776 12.2393 3.09375 12.9833 3.09375 13.7812C3.09375 15.9025 4.74097 17.645 6.82324 17.8C6.42151 18.4268 6.1875 19.1708 6.1875 19.9688C6.1875 22.1917 7.99585 24 10.2188 24C12.4417 24 14.25 22.1917 14.25 19.9688C14.25 19.1708 14.016 18.4268 13.6143 17.8C15.6965 17.645 17.3438 15.9025 17.3438 13.7812C17.3438 12.9833 17.1097 12.2393 16.708 11.6125C18.7903 11.4575 20.4375 9.71503 20.4375 7.59375ZM10.2122 5.43768C10.2144 5.43768 10.2166 5.43805 10.2188 5.43805C10.2209 5.43805 10.2231 5.43768 10.2253 5.43768C11.4113 5.44135 12.375 6.40704 12.375 7.59375C12.375 8.78265 11.4077 9.75 10.2188 9.75C9.02985 9.75 8.0625 8.78265 8.0625 7.59375C8.0625 6.40704 9.02618 5.44135 10.2122 5.43768ZM4.03125 9.75C2.84235 9.75 1.875 8.78265 1.875 7.59375C1.875 6.40485 2.84235 5.4375 4.03125 5.4375C5.22015 5.4375 6.1875 6.40485 6.1875 7.59375C6.1875 8.78265 5.22015 9.75 4.03125 9.75ZM7.125 15.9375C5.9361 15.9375 4.96875 14.9702 4.96875 13.7812C4.96875 12.5923 5.9361 11.625 7.125 11.625C8.3139 11.625 9.28125 12.5923 9.28125 13.7812C9.28125 14.9702 8.3139 15.9375 7.125 15.9375ZM10.2188 22.125C9.02985 22.125 8.0625 21.1577 8.0625 19.9688C8.0625 18.7798 9.02985 17.8125 10.2188 17.8125C11.4077 17.8125 12.375 18.7798 12.375 19.9688C12.375 21.1577 11.4077 22.125 10.2188 22.125ZM13.3125 15.9375C12.1236 15.9375 11.1562 14.9702 11.1562 13.7812C11.1562 12.5923 12.1236 11.625 13.3125 11.625C14.5014 11.625 15.4688 12.5923 15.4688 13.7812C15.4688 14.9702 14.5014 15.9375 13.3125 15.9375ZM16.4062 9.75C15.2173 9.75 14.25 8.78265 14.25 7.59375C14.25 6.40485 15.2173 5.4375 16.4062 5.4375C17.5952 5.4375 18.5625 6.40485 18.5625 7.59375C18.5625 8.78265 17.5952 9.75 16.4062 9.75Z" fill="var(--primary)"/>
								</svg>
								<h6 class="sub-title mb-0 flex-1 font-w700">Fresh Fruits</h6>
								<h6 class="sub-title text-soft mb-0 ms-auto font-w500">4 Stars</h6>
								<svg class="ms-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.25005 20.25C8.05823 20.25 7.86623 20.1767 7.7198 20.0303C7.42673 19.7372 7.42673 19.2626 7.7198 18.9698L14.6895 12L7.7198 5.03026C7.42673 4.7372 7.42673 4.26263 7.7198 3.96976C8.01286 3.67688 8.48742 3.67669 8.7803 3.96976L16.2803 11.4698C16.5734 11.7628 16.5734 12.2374 16.2803 12.5303L8.7803 20.0303C8.63386 20.1767 8.44186 20.25 8.25005 20.25Z" fill="#7D8FAB"/>
								</svg>
							</li>
							<li class="d-flex align-items-center pb-3">
								<svg class="me-3" width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M23.7503 9.55885C23.6609 9.24995 23.4192 9.00825 23.1103 8.91889C22.9371 8.86872 18.8331 7.72651 15.7764 10.7836C14.2333 12.3272 13.9651 14.6464 15.0101 16.335L12.9373 18.4082V11.0907C14.8702 10.6359 16.32 8.80518 16.32 6.6222C16.32 2.29834 12.6105 0.20343 12.4525 0.116455C12.1708 -0.0388184 11.8292 -0.0388184 11.5475 0.116455C11.3895 0.20343 7.67999 2.29834 7.67999 6.6222C7.67999 8.80518 9.12982 10.6359 11.0627 11.0907V18.4082L8.99157 16.3367C10.0062 14.7063 9.81756 12.3779 8.22345 10.7836C5.16686 7.72651 1.06292 8.8689 0.889699 8.91889C0.580799 9.00825 0.339283 9.24995 0.249744 9.55885C0.199757 9.73225 -0.942456 13.8371 2.11413 16.8942C3.68096 18.4613 5.99963 18.6912 7.66424 17.6607L11.3315 21.3285C11.7008 21.705 12.3032 21.7011 12.6689 21.3283L16.3347 17.6618C17.9744 18.6826 20.2989 18.4814 21.8859 16.8942C24.9425 13.8369 23.8002 9.73206 23.7503 9.55885ZM7.59631 14.9409L6.45098 13.7954C6.08496 13.4293 5.49151 13.4293 5.1253 13.7954C4.75927 14.1616 4.75927 14.7552 5.1253 15.1212L6.27026 16.2664C5.35693 16.6038 4.23376 16.3625 3.43963 15.5684C2.11413 14.2425 1.68694 12.4206 1.94677 10.6163C3.73937 10.3579 5.56329 10.7747 6.89794 12.1095C7.71624 12.928 7.92443 14.0548 7.59631 14.9409ZM12 6.56067C11.4824 6.56067 11.0627 6.98054 11.0627 7.49817V9.11774C10.1783 8.71052 9.55462 7.74537 9.55462 6.6222C9.55462 4.74537 10.543 3.15399 12.0016 2.06305C12.8174 2.67114 14.4454 4.19001 14.4454 6.6222C14.4454 7.74537 13.8219 8.71052 12.9373 9.11774V7.49817C12.9373 6.98054 12.5176 6.56067 12 6.56067ZM20.5602 15.5684C19.7419 16.3869 18.6152 16.595 17.7294 16.2667L18.8747 15.1214C19.2405 14.7552 19.2405 14.1616 18.8747 13.7955C18.5087 13.4295 17.9152 13.4295 17.549 13.7955L16.4042 14.9405C16.0666 14.027 16.3079 12.9038 17.1021 12.1095C18.4387 10.7727 20.2723 10.3592 22.0552 10.6166C22.2021 11.6234 22.2796 13.8486 20.5602 15.5684Z" fill="var(--primary)"/>
								</svg>
								<h6 class="sub-title mb-0 flex-1 font-w700">Fresh Vegetables</h6>
								<h6 class="sub-title text-soft mb-0 ms-auto font-w500">68 Items</h6>
								<svg class="ms-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.25005 20.25C8.05823 20.25 7.86623 20.1767 7.7198 20.0303C7.42673 19.7372 7.42673 19.2626 7.7198 18.9698L14.6895 12L7.7198 5.03026C7.42673 4.7372 7.42673 4.26263 7.7198 3.96976C8.01286 3.67688 8.48742 3.67669 8.7803 3.96976L16.2803 11.4698C16.5734 11.7628 16.5734 12.2374 16.2803 12.5303L8.7803 20.0303C8.63386 20.1767 8.44186 20.25 8.25005 20.25Z" fill="#7D8FAB"/>
								</svg>
							</li>
							<li class="d-flex align-items-center pb-3">
								<svg class="me-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 0C5.36792 0 0 5.367 0 12C0 12.5178 0.419678 12.9375 0.9375 12.9375H7.97021L6.867 17.4664C6.05713 20.7913 8.57281 24 12 24C15.4219 24 17.9442 20.7962 17.133 17.4664L16.0298 12.9375H23.0625C23.5803 12.9375 24 12.5178 24 12C24 5.36792 18.633 0 12 0ZM12 22.125C9.79266 22.125 8.16559 20.0583 8.68872 17.9103L9.89996 12.9375H14.1L15.3113 17.9103C15.8337 20.055 14.2108 22.125 12 22.125ZM1.91748 11.0625C2.38458 5.94122 6.68939 1.875 12 1.875C17.3088 1.875 21.6151 5.93939 22.0825 11.0625C21.0262 11.0625 3.03149 11.0625 1.91748 11.0625ZM13.1719 5.0625C13.1719 5.70978 12.6473 6.23438 12 6.23438C11.3527 6.23438 10.8281 5.70978 10.8281 5.0625C10.8281 4.41522 11.3527 3.89062 12 3.89062C12.6473 3.89062 13.1719 4.41522 13.1719 5.0625ZM8.25 8.29688C8.25 8.94415 7.7254 9.46875 7.07812 9.46875C6.43085 9.46875 5.90625 8.94415 5.90625 8.29688C5.90625 7.6496 6.43085 7.125 7.07812 7.125C7.7254 7.125 8.25 7.6496 8.25 8.29688ZM17.625 8.29688C17.625 8.94415 17.1004 9.46875 16.4531 9.46875C15.8058 9.46875 15.2812 8.94415 15.2812 8.29688C15.2812 7.6496 15.8058 7.125 16.4531 7.125C17.1004 7.125 17.625 7.6496 17.625 8.29688Z" fill="var(--primary)"/>
								</svg>
								<h6 class="sub-title mb-0 flex-1 font-w700">Mushrooms</h6>
								<h6 class="sub-title text-soft mb-0 ms-auto font-w500">17 Items</h6>
								<svg class="ms-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.25005 20.25C8.05823 20.25 7.86623 20.1767 7.7198 20.0303C7.42673 19.7372 7.42673 19.2626 7.7198 18.9698L14.6895 12L7.7198 5.03026C7.42673 4.7372 7.42673 4.26263 7.7198 3.96976C8.01286 3.67688 8.48742 3.67669 8.7803 3.96976L16.2803 11.4698C16.5734 11.7628 16.5734 12.2374 16.2803 12.5303L8.7803 20.0303C8.63386 20.1767 8.44186 20.25 8.25005 20.25Z" fill="#7D8FAB"/>
								</svg>
							</li>
							<li class="d-flex align-items-center pb-3">
								<svg class="me-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M24 10.0761C24 8.11541 22.7548 6.2785 20.8546 5.80517C20.0473 5.60412 19.2108 5.62976 18.4477 5.87274C17.5468 4.8858 16.2508 4.26562 14.8125 4.26562C13.7955 4.26562 12.8126 4.57965 11.9892 5.15716C11.182 4.59576 10.1995 4.26562 9.14058 4.26562C7.7519 4.26562 6.4275 4.85944 5.50025 5.87585C4.90076 5.68378 4.24982 5.62115 3.58661 5.7182C1.47724 6.02655 -0.031006 7.8977 0.000488173 10.1678C0.0147704 11.1815 0.404786 12.0742 1.04859 12.7637C0.37677 13.5621 -0.0158083 14.6243 0.000488173 15.7928C0.0323485 18.0383 1.96631 19.7344 4.15772 19.7344H19.7915C20.8742 19.7344 21.9093 19.3334 22.706 18.6052C23.5316 17.8504 23.9912 16.8402 23.9998 15.7612L24 15.7011C24 14.7484 23.7017 13.8017 23.1602 13.0356C23.0905 12.9369 23.0169 12.8417 22.9398 12.7504C23.6132 12.0324 23.9919 11.1134 23.9998 10.1362L24 10.0761ZM3.79004 7.10962C5.27943 6.8919 6.67835 7.86602 6.97498 9.32739L8.35304 9.0476C8.14521 8.02349 7.57777 7.15905 6.80488 6.56122C7.443 5.9956 8.27449 5.67187 9.14058 5.67187C11.1049 5.67187 12.7031 7.24896 12.7031 9.1875H14.1093C14.1093 8.04144 13.7118 6.98565 13.0462 6.14831C13.5789 5.8385 14.1866 5.67187 14.8125 5.67187C16.751 5.67187 18.3281 7.24896 18.3281 9.1875H19.7343C19.7343 8.44903 19.5705 7.7481 19.2779 7.11877C19.682 7.05304 20.1079 7.06842 20.5146 7.16986C21.7194 7.46997 22.5937 8.6922 22.5937 10.0761L22.5935 10.1243C22.5884 10.7651 22.3266 11.3707 21.8622 11.8412C21.5465 11.6576 21.208 11.5182 20.8546 11.4304C20.0473 11.2291 19.2108 11.2549 18.4477 11.4977C17.5468 10.5108 16.2508 9.89062 14.8125 9.89062C13.7955 9.89062 12.8126 10.2046 11.9892 10.7822C11.182 10.2208 10.1995 9.89062 9.14058 9.89062C7.7519 9.89062 6.42731 10.4844 5.50025 11.501C4.90076 11.3088 4.24982 11.2461 3.58661 11.3432C3.05634 11.4206 2.56433 11.597 2.12506 11.8535C1.68543 11.4051 1.41608 10.8224 1.40656 10.1481C1.38495 8.5924 2.38745 7.31469 3.79004 7.10962ZM22.5935 15.7493C22.5824 17.1471 21.2992 18.3281 19.7915 18.3281H4.15772C2.7013 18.3281 1.42706 17.2297 1.40656 15.7731C1.38513 14.2176 2.38745 12.9397 3.79004 12.7346C5.27943 12.5171 6.67835 13.491 6.97498 14.9524L8.35304 14.6726C8.14521 13.6487 7.57758 12.7842 6.80488 12.1864C7.443 11.6206 8.2743 11.2969 9.14058 11.2969C11.1049 11.2969 12.7031 12.874 12.7031 14.8125H14.1093C14.1093 13.6664 13.7118 12.6106 13.0462 11.7733C13.5789 11.4635 14.1866 11.2969 14.8125 11.2969C16.751 11.2969 18.3281 12.874 18.3281 14.8125H19.7343C19.7343 14.074 19.5705 13.3731 19.2779 12.7438C19.682 12.678 20.1079 12.6934 20.5146 12.7949C21.7194 13.095 22.5937 14.3172 22.5937 15.7011L22.5935 15.7493Z" fill="var(--primary)"/>
								</svg>
								<h6 class="sub-title mb-0 flex-1 font-w700">Bakery</h6>
								<h6 class="sub-title text-soft mb-0 ms-auto font-w500">24 Items</h6>
								<svg class="ms-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.25005 20.25C8.05823 20.25 7.86623 20.1767 7.7198 20.0303C7.42673 19.7372 7.42673 19.2626 7.7198 18.9698L14.6895 12L7.7198 5.03026C7.42673 4.7372 7.42673 4.26263 7.7198 3.96976C8.01286 3.67688 8.48742 3.67669 8.7803 3.96976L16.2803 11.4698C16.5734 11.7628 16.5734 12.2374 16.2803 12.5303L8.7803 20.0303C8.63386 20.1767 8.44186 20.25 8.25005 20.25Z" fill="#7D8FAB"/>
								</svg>
							</li>
							<li class="d-flex align-items-center pb-3">
								<svg class="me-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_345_28)">
									<path d="M23.9006 11.6308C22.9013 9.90325 21.4642 8.45439 19.7448 7.44081C19.1367 7.08231 18.4982 6.7818 17.8383 6.54175C17.5 5.68971 16.9526 4.93066 16.2284 4.3278C15.087 3.3777 13.6439 2.9291 12.1649 3.06424C10.686 3.19952 9.34826 3.9026 8.39815 5.0441C8.13659 5.3583 8.17924 5.82504 8.49349 6.0866L9.50566 6.92917C9.33865 7.01247 9.17196 7.09938 9.00569 7.19214C7.81971 7.8542 6.66368 8.761 5.63469 9.83359L1.10047 7.30853C0.803804 7.1433 0.432601 7.20114 0.200383 7.44897C-0.0319292 7.69675 -0.0658667 8.07081 0.118211 8.35628L2.59058 12.1919L0.127539 15.8271C-0.0586011 16.1018 -0.039148 16.4669 0.175211 16.7204C0.38957 16.9738 0.746382 17.0534 1.04816 16.9155L6.0927 14.6087C7.1269 15.5787 8.21473 16.3671 9.33232 16.956C9.39129 16.987 9.4503 17.0164 9.50932 17.0463L8.46406 17.9164C8.31316 18.0419 8.21834 18.2224 8.20048 18.4179C8.18262 18.6134 8.24313 18.808 8.36871 18.9588C9.4668 20.278 11.0511 20.9593 12.6466 20.9593C13.9008 20.9593 15.1619 20.5383 16.199 19.6751C16.9198 19.075 17.4655 18.3204 17.8041 17.4732C18.4761 17.2311 19.1261 16.9267 19.7446 16.5621C21.464 15.5485 22.9011 14.0996 23.9004 12.3721C24.0333 12.1428 24.0333 11.8601 23.9006 11.6308ZM12.2997 4.53855C13.3847 4.43904 14.4436 4.76857 15.2811 5.46569C15.48 5.63125 15.6601 5.81332 15.8214 6.0085C15.1812 5.89966 14.5302 5.84407 13.8753 5.84407C12.9363 5.84407 11.9942 5.99571 11.0575 6.29477L10.0606 5.46485C10.6907 4.93811 11.4644 4.61496 12.2997 4.53855ZM15.252 18.5372C13.7174 19.8146 11.5142 19.7723 10.032 18.5375L11.0498 17.6903C11.996 18.0016 12.9412 18.1588 13.8754 18.1588C14.5186 18.1588 15.1581 18.1053 15.7873 18.0002C15.6272 18.1932 15.4488 18.3733 15.252 18.5372ZM13.8753 16.6784C10.7376 16.6784 8.07377 14.4992 6.76517 13.2003C6.62342 13.0597 6.43493 12.9855 6.2435 12.9855C6.13948 12.9855 6.03457 13.0074 5.93586 13.0525L2.83499 14.4705L4.09067 12.6173C4.25708 12.3716 4.26078 12.0504 4.1 11.801L2.96619 10.042L5.42286 11.4101C5.72581 11.5788 6.10512 11.5146 6.33575 11.2558C8.56104 8.75744 11.3091 7.32452 13.8753 7.32452C17.3229 7.32452 20.5476 9.10576 22.3939 12.0014C20.5476 14.8971 17.3229 16.6784 13.8753 16.6784Z" fill="var(--primary)"/>
									<path d="M17.4574 11.985C18.1043 11.985 18.6288 11.4606 18.6288 10.8137C18.6288 10.1668 18.1043 9.64236 17.4574 9.64236C16.8105 9.64236 16.2861 10.1668 16.2861 10.8137C16.2861 11.4606 16.8105 11.985 17.4574 11.985Z" fill="var(--primary)"/>
									</g>
									<defs>
									<clipPath id="clip0_345_28">
									<rect width="24" height="24" fill="white"/>
									</clipPath>
									</defs>
								</svg>
								<h6 class="sub-title mb-0 flex-1 font-w700">Fresh Fishes</h6>
								<h6 class="sub-title text-soft mb-0 ms-auto font-w500">36 Items</h6>
								<svg class="ms-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.25005 20.25C8.05823 20.25 7.86623 20.1767 7.7198 20.0303C7.42673 19.7372 7.42673 19.2626 7.7198 18.9698L14.6895 12L7.7198 5.03026C7.42673 4.7372 7.42673 4.26263 7.7198 3.96976C8.01286 3.67688 8.48742 3.67669 8.7803 3.96976L16.2803 11.4698C16.5734 11.7628 16.5734 12.2374 16.2803 12.5303L8.7803 20.0303C8.63386 20.1767 8.44186 20.25 8.25005 20.25Z" fill="#7D8FAB"/>
								</svg>
							</li>
						</ul>
					</div>
					<a href="javascript:void(0);" class="btn btn-primary w-100" data-bs-dismiss="offcanvas">APPLY FILTER</a>
				</div>
			</div>
        </div>
    </div>
	<!-- FILTER -->

@endsection
@section('after-scripts-end')
<script src="{{ asset('mobile/index.js')}}"></script>
@endsection
