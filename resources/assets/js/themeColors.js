
// import {index, barchart, forthcircle, btcchart, cryptoChart2, spark1, spark2, spark3, spark4, cryptodonut, revenuechart, recentorders, vectormap} from "./index1"

'use strict'

// modified code start
let lightPrimaryColor  = document.querySelector('#colorID')
lightPrimaryColor?.addEventListener('input', changePrimaryColor)

let darkPrimaryColorID  = document.querySelector('#darkPrimaryColorID')
darkPrimaryColorID?.addEventListener('input', darkPrimaryColor)

const handleThemeUpdate = (cssVars) => {
    const root = document.querySelector(':root');
    const keys = Object.keys(cssVars);
    keys.forEach(key => {
        root.style.setProperty(key, cssVars[key]);
    });
}

function dynamicPrimaryColor(primaryColor) {
	primaryColor.forEach((item) => {
		item.addEventListener('input', (e) => {
			const cssPropName = `--primary-${e.target.getAttribute('data-id')}`;
			const cssPropName1 = `--primary-${e.target.getAttribute('data-id1')}`;
			const cssPropName2 = `--primary-${e.target.getAttribute('data-id2')}`;
			const cssPropName7 = `--primary-${e.target.getAttribute('data-id7')}`;
			const cssPropName8 = `--darkprimary-${e.target.getAttribute('data-id8')}`;
			const cssPropName3 = `--dark-${e.target.getAttribute('data-id3')}`;
			handleThemeUpdate({
				[cssPropName]: e.target.value,
				// 95 is used as the opacity 0.95
				[cssPropName1]: e.target.value + 95,
				[cssPropName2]: e.target.value,
				[cssPropName3]: e.target.value,
				[cssPropName7]: e.target.value + 20,
				[cssPropName8]: e.target.value + 20,
			});
		});
	});
}

$(function () {
	// Light theme color picker
	const dynamicPrimaryLight = document.querySelectorAll('input.color-primary-light');
	dynamicPrimaryColor(dynamicPrimaryLight);

	// dark theme color picker
	const DarkDynamicPrimaryLight = document.querySelectorAll('input.color-primary-dark');
	dynamicPrimaryColor(DarkDynamicPrimaryLight);

	localStorageBackup();

	$('#myonoffswitch1').on('click', function () {
		document.querySelector('body')?.classList.remove('dark-theme');
		$('#myonoffswitch1').prop('checked', true);

		localStorage.setItem('spruhalightMode', true);
		localStorage.removeItem('spruhadarkMode');
	})
	$('#myonoffswitch2').on('click', function () {
		document.querySelector('body')?.classList.remove('light-theme');
		$('#myonoffswitch2').prop('checked', true);

		localStorage.setItem('spruhadarkMode', true);
		localStorage.removeItem('spruhalightMode');
	})
});

function localStorageBackup() {
	'use strict'
	// if there is a value stored, update color picker and background color
	// Used to retrive the data from local storage
	if (localStorage.spruhaprimaryColor) {
		if(document.getElementById('colorID')){
			document.getElementById('colorID').value = localStorage.spruhaprimaryColor;
		}
		document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.spruhaprimaryColor);
		document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.spruhaprimaryHoverColor);
		document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.spruhaprimaryBorderColor);
		document.querySelector('html').style.setProperty('--primary-transparentcolor', localStorage.spruhaprimaryTransparent);
		document.querySelector('body')?.classList.add('light-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');

		$('#myonoffswitch1').prop('checked', true);
		$('#myonoffswitch6').prop('checked', true);
		if (document.querySelector('body')?.classList.contains('dark-menu')) {
			$('#myonoffswitch5').prop('checked', true);
		}
		else {
			$('#myonoffswitch3').prop('checked', true);
		}

	}

	if (localStorage.spruhadarkPrimary) {
		if(document.getElementById('darkPrimaryColorID')){
			document.getElementById('darkPrimaryColorID').value = localStorage.spruhadarkPrimary;
		}
		document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.spruhadarkPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.spruhadarkPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.spruhadarkPrimary);
		document.querySelector('html').style.setProperty('--dark-primary', localStorage.spruhadarkPrimary);
		document.querySelector('html').style.setProperty('--darkprimary-transparentcolor', localStorage.spruhadarkprimaryTransparent);
		document.querySelector('body')?.classList.add('dark-theme');
		document.querySelector('body')?.classList.remove('light-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');

		$('#myonoffswitch2').prop('checked', true);
		$('#myonoffswitch5').prop('checked', true);
		$('#myonoffswitch8').prop('checked', true);
	}

	if (localStorage.spruhalightMode) {
		document.querySelector('body')?.classList.add('light-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');
		$('#myonoffswitch1').prop('checked', true);
		$('#myonoffswitch3').prop('checked', true);
		$('#myonoffswitch6').prop('checked', true);
	}

	if (localStorage.spruhadarkMode) {
		document.querySelector('body')?.classList.remove('light-theme');
		document.querySelector('body')?.classList.add('dark-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');
		$('#myonoffswitch2').prop('checked', true);
		$('#myonoffswitch5').prop('checked', true);
		$('#myonoffswitch8').prop('checked', true);
	}

	if (localStorage.spruhartl) {
		$('body').addClass('rtl');
		$('#myonoffswitch20').prop('checked', true);
	}
	if (localStorage.spruhahorizontalmenu) {
		$('body').addClass('horizontalmenu');
		$('#myonoffswitch02').prop('checked', true);
	}
	if (localStorage.spruhahorizontalmenuhover) {
		$('body').addClass('horizontalmenu-hover');
		$('#myonoffswitch03').prop('checked', true);
	}
	if (localStorage.spruhalightmenu) {
		$('body').addClass('light-menu');
		$('#myonoffswitch3').prop('checked', true);
	}
	if (localStorage.spruhadarkmenu) {
		$('body').addClass('dark-menu');
		$('#myonoffswitch5').prop('checked', true);
	}
	if (localStorage.spruhacolormenu) {
		$('body').addClass('color-menu');
		$('#myonoffswitch4').prop('checked', true);
	}
	if (localStorage.spruhalightheader) {
		$('body').addClass('header-light');
		$('#myonoffswitch6').prop('checked', true);
	}
	if (localStorage.spruhadarkheader) {
		$('body').addClass('header-dark');
		$('#myonoffswitch8').prop('checked', true);
	}
	if (localStorage.spruhacolorheader) {
		$('body').addClass('color-header');
		$('#myonoffswitch7').prop('checked', true);
	}
	if (localStorage.spruhaboxed) {
		$('body').addClass('layout-boxed');
		$('#myonoffswitch10').prop('checked', true);
	}
	if (localStorage.spruhafullwidth) {
		$('body').addClass('layout-fullwidth');
		$('#myonoffswitch9').prop('checked', true);
	}
	if (localStorage.spruhafixed) {
		$('body').addClass('fixed-layout');
		$('#myonoffswitch11').prop('checked', true);
	}
	if (localStorage.spruhascrollable) {
		$('body').addClass('scrollable-layout');
		$('#myonoffswitch12').prop('checked', true);
	}
	if (localStorage.spruhadefaultmenu) {
		$('body').addClass('default-menu');
		$('#myonoffswitch13').prop('checked', true);
	}
	if (localStorage.spruhaicontext) {
		$('body').addClass('icontext-menu');
		$('#myonoffswitch14').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
	if (localStorage.spruhaiconoverlay) {
		$('body').addClass('icon-overlay');
		$('#myonoffswitch15').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
	if (localStorage.spruhaclosed) {
		$('body').addClass('closed-leftmenu');
		$('#myonoffswitch16').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
	if (localStorage.spruhahoversubmenu) {
		$('body').addClass('hover-submenu');
		$('#myonoffswitch17').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
	if (localStorage.spruhahoversubmenustyle1) {
		$('body').addClass('hover-submenu1');
		$('#myonoffswitch18').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
}


// triggers on changing the color picker
function changePrimaryColor() {
	'use strict'
	$('#myonoffswitch3').prop('checked', true);
	$('#myonoffswitch6').prop('checked', true);

	var userColor = document.getElementById('colorID').value;
	localStorage.setItem('spruhaprimaryColor', userColor);
	// to store value as opacity 0.95 we use 95
	localStorage.setItem('spruhaprimaryHoverColor', userColor + 95);
	localStorage.setItem('spruhaprimaryBorderColor', userColor);
	localStorage.setItem('spruhaprimaryTransparent', userColor + 20);

	// removing dark theme properties
	localStorage.removeItem('spruhadarkPrimary')
	localStorage.removeItem('spruhatransparentBgColor');
	localStorage.removeItem('spruhatransparentThemeColor');
	localStorage.removeItem('spruhatransparentPrimary');
	localStorage.removeItem('spruhatransparentprimaryTransparent');
	localStorage.removeItem('spruhadarkprimaryTransparent');
	document.querySelector('body')?.classList.add('light-theme');
	document.querySelector('body')?.classList.remove('dark-theme');
	document.querySelector('body')?.classList.remove('transparent-theme');
	localStorage.removeItem('spruhaBgImage');
	document.querySelector('body')?.classList.add('dark-menu');

	$('#myonoffswitch1').prop('checked', true);

	names()

	localStorage.setItem('spruhalightMode', true);
	localStorage.removeItem('spruhadarkMode');
	localStorage.removeItem('spruhatransparentMode');

}

function darkPrimaryColor() {
	'use strict'
	var userColor = document.getElementById('darkPrimaryColorID').value;
	localStorage.setItem('spruhadarkPrimary', userColor);
	localStorage.setItem('spruhadarkprimaryTransparent', userColor + 20);
	$('#myonoffswitch5').prop('checked', true);
	$('#myonoffswitch8').prop('checked', true);


	// removing light theme data
	localStorage.removeItem('spruhaprimaryColor')
	localStorage.removeItem('spruhaprimaryHoverColor')
	localStorage.removeItem('spruhaprimaryBorderColor')
	localStorage.removeItem('spruhaprimaryTransparent');

	localStorage.removeItem('spruhatransparentBgColor');
	localStorage.removeItem('spruhatransparentThemeColor');
	localStorage.removeItem('spruhatransparentPrimary');
	localStorage.removeItem('spruhatransparentprimaryTransparent');
	localStorage.removeItem('spruhatransparentBgImgPrimary');
	localStorage.removeItem('spruhatransparentBgImgprimaryTransparent');
	localStorage.removeItem('spruhaBgImage');

	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.add('dark-theme');
	document.querySelector('body')?.classList.remove('transparent-theme');

	$('#myonoffswitch2').prop('checked', true);

	names()
	localStorage.setItem('spruhadarkMode', true);
	localStorage.removeItem('spruhalightMode');
	localStorage.removeItem('spruhatransparentMode');
}

// to check the value is hexa or not
const isValidHex = (hexValue) => /^#([A-Fa-f0-9]{3,4}){1,2}$/.test(hexValue)

const getChunksFromString = (st, chunkSize) => st.match(new RegExp(`.{${chunkSize}}`, "g"))
// convert hex value to 256
const convertHexUnitTo256 = (hexStr) => parseInt(hexStr.repeat(2 / hexStr.length), 16)
// get alpha value is equla to 1 if there was no value is asigned to alpha in function
const getAlphafloat = (a, alpha) => {
	if (typeof a !== "undefined") { return a / 255 }
	if ((typeof alpha != "number") || alpha < 0 || alpha > 1) {
		return 1
	}
	return alpha
}
// convertion of hex code to rgba code
function hexToRgba(hexValue, alpha) {
	if (!isValidHex(hexValue)) { return null }
	const chunkSize = Math.floor((hexValue.length - 1) / 3)
	const hexArr = getChunksFromString(hexValue.slice(1), chunkSize)
	const [r, g, b, a] = hexArr.map(convertHexUnitTo256)
	return `rgba(${r}, ${g}, ${b}, ${getAlphafloat(a, alpha)})`
}

function switcherEvents() {
	'use strict';


	/*Light Theme Start*/
	$(document).on("click", '#myonoffswitch1', function () {
		if (this.checked) {
			$('body').addClass('light-theme');
			$('body').removeClass('dark-theme');
			$('#myonoffswitch5').prop('checked', true);
			$('#myonoffswitch6').prop('checked', true);

			// remove dark theme properties
			localStorage.removeItem('spruhadarkPrimary')

			// remove light theme properties
			localStorage.removeItem('spruhaprimaryColor')
			localStorage.removeItem('spruhaprimaryHoverColor')
			localStorage.removeItem('spruhaprimaryBorderColor')
		}
	});
	/*Light Theme End*/

	/*Dark Theme Start*/
	$(document).on("click", '#myonoffswitch2', function () {
		if (this.checked) {
			$('body').addClass('dark-theme');
			$('body').removeClass('light-theme');
			$('#myonoffswitch5').prop('checked', true);
			$('#myonoffswitch8').prop('checked', true);

			// remove light theme properties
			localStorage.removeItem('spruhaprimaryColor')
			localStorage.removeItem('spruhaprimaryHoverColor')
			localStorage.removeItem('spruhaprimaryBorderColor')
			localStorage.removeItem('spruhadarkPrimary')
		}
	});
	/*Dark Theme End*/

	/*Light Menu Start*/
	$(document).on("click", '#myonoffswitch3', function () {
		if (this.checked) {
			$('body').addClass('light-menu');
			$('body').removeClass('color-menu');
			$('body').removeClass('dark-menu');
			localStorage.setItem("spruhalightmenu", true);
			localStorage.removeItem("spruhadarkmenu");
			localStorage.removeItem("spruhacolormenu");
		}
	});
	/*Light Menu End*/

	/*Color Menu Start*/
	$(document).on("click", '#myonoffswitch4', function () {
		if (this.checked) {
			$('body').addClass('color-menu');
			$('body').removeClass('light-menu');
			$('body').removeClass('dark-menu');
			localStorage.setItem("spruhacolormenu", true);
			localStorage.removeItem("spruhadarkmenu");
			localStorage.removeItem("spruhalightmenu");
		}
	});
	/*Color Menu End*/

	/*Dark Menu Start*/
	$(document).on("click", '#myonoffswitch5', function () {
		if (this.checked) {
			$('body').addClass('dark-menu');
			$('body').removeClass('color-menu');
			$('body').removeClass('light-menu');
			localStorage.setItem("spruhadarkmenu", true);
			localStorage.removeItem("spruhacolormenu");
			localStorage.removeItem("spruhalightmenu");
		}
	});
	/*Dark Menu End*/

	/*Light Header Start*/
	$(document).on("click", '#myonoffswitch6', function () {
		if (this.checked) {
			$('body').addClass('header-light');
			$('body').removeClass('color-header');
			$('body').removeClass('header-dark');
			localStorage.setItem("spruhalightheader", true);
			localStorage.removeItem("spruhadarkheader");
			localStorage.removeItem("spruhacolorheader");
		}
	});
	/*Light Header End*/

	/*Color Header Start*/
	$(document).on("click", '#myonoffswitch7', function () {
		if (this.checked) {
			$('body').addClass('color-header');
			$('body').removeClass('header-light');
			$('body').removeClass('header-dark');
			localStorage.setItem("spruhacolorheader", true);
			localStorage.removeItem("spruhadarkheader");
			localStorage.removeItem("spruhalightheader");
		}
	});
	/*Color Header End*/

	/*Dark Header Start*/
	$(document).on("click", '#myonoffswitch8', function () {
		if (this.checked) {
			$('body').addClass('header-dark');
			$('body').removeClass('color-header');
			$('body').removeClass('header-light');
			localStorage.setItem("spruhadarkheader", true);
			localStorage.removeItem("spruhacolorheader");
			localStorage.removeItem("spruhalightheader");
		}
	});
	/*Dark Header End*/

	/*Full Width Layout Start*/
	$(document).on("click", '#myonoffswitch9', function () {
		if (this.checked) {
			$('body').addClass('layout-fullwidth');
			$('body').removeClass('layout-boxed');
			localStorage.setItem("spruhafullwidth", true);
			localStorage.removeItem("spruhaboxed");
		}
	});
	/*Full Width Layout End*/

	/*Boxed Layout Start*/
	$(document).on("click", '#myonoffswitch10', function () {
		if (this.checked) {
			$('body').addClass('layout-boxed');
			$('body').removeClass('layout-fullwidth');
			localStorage.setItem("spruhaboxed", true);
			localStorage.removeItem("spruhafullwidth");
		}

		// if (document.querySelector('body').classList.contains('horizontalmenu') && !document.querySelector('body').classList.contains('error-1')) {
			// checkHoriMenu();
			// responsive();
		// }
	});
	/*Boxed Layout End*/

	/*Header-Position Styles Start*/
	$(document).on("click", '#myonoffswitch11', function () {
		if (this.checked) {
			$('body').addClass('fixed-layout');
			$('body').removeClass('scrollable-layout');
			localStorage.setItem("spruhafixed", true);
			localStorage.removeItem("spruhascrollable");
		}
	});
	$(document).on("click", '#myonoffswitch12', function () {
		if (this.checked) {
			$('body').addClass('scrollable-layout');
			$('body').removeClass('fixed-layout');
			localStorage.setItem("spruhascrollable", true);
			localStorage.removeItem("spruhafixed");
		}
	});
	/*Header-Position Styles End*/

	/*Default Sidemenu Start*/
	$(document).on("click", '#myonoffswitch13', function () {
		if (this.checked) {
			$('body').addClass('default-menu');
			$('body').removeClass('main-sidebar-hide');
			hovermenu();
			$('body').removeClass('icontext-menu');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('hover-submenu');
			$('body').removeClass('hover-submenu1');
			localStorage.setItem("spruhadefaultmenu", true);
			localStorage.removeItem("spruhaicontext");
			localStorage.removeItem("spruhaiconoverlay");
			localStorage.removeItem("spruhaclosed");
			localStorage.removeItem("spruhahoversubmenu");
			localStorage.removeItem("spruhahoversubmenustyle1");
		}
	});
	/*Default Sidemenu End*/

	/*Icon Text Sidemenu Start*/
	$(document).on("click", '#myonoffswitch14', function () {
		if (this.checked) {
			$('body').addClass('icontext-menu');
			icontext();
			$('body').addClass('main-sidebar-hide');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('hover-submenu1');
			$('body').removeClass('default-menu');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('hover-submenu');
			localStorage.setItem("spruhaicontext", true);
			localStorage.removeItem("spruhadefaultmenu");
			localStorage.removeItem("spruhaiconoverlay");
			localStorage.removeItem("spruhaclosed");
			localStorage.removeItem("spruhahoversubmenu");
			localStorage.removeItem("spruhahoversubmenustyle1");
		}
	});
	/*Icon Text Sidemenu End*/

	/*Icon Overlay Sidemenu Start*/
	$(document).on("click", '#myonoffswitch15', function () {
		if (this.checked) {
			$('body').addClass('icon-overlay');
			hovermenu();
			$('body').addClass('main-sidebar-hide');
			$('body').removeClass('hover-submenu1');
			$('body').removeClass('default-menu');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('hover-submenu');
			$('body').removeClass('icontext-menu');
			localStorage.setItem("spruhaiconoverlay", true);
			localStorage.removeItem("spruhadefaultmenu");
			localStorage.removeItem("spruhaicontext");
			localStorage.removeItem("spruhaclosed");
			localStorage.removeItem("spruhahoversubmenu");
			localStorage.removeItem("spruhahoversubmenustyle1");
		}
	});
	/*Icon Overlay Sidemenu End*/

	/*Closed Sidemenu Start*/
	$(document).on("click", '#myonoffswitch16', function () {
		if (this.checked) {
			$('body').addClass('closed-leftmenu');
			$('body').addClass('main-sidebar-hide');
			$('body').removeClass('default-menu');
			$('body').removeClass('hover-submenu1');
			$('body').removeClass('hover-submenu');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('icontext-menu');
			localStorage.setItem("spruhaclosed", true);
			localStorage.removeItem("spruhadefaultmenu");
			localStorage.removeItem("spruhaicontext");
			localStorage.removeItem("spruhaiconoverlay");
			localStorage.removeItem("spruhahoversubmenu");
			localStorage.removeItem("spruhahoversubmenustyle1");

		}
	});
	/*Closed Sidemenu End*/

	/*Hover Submenu Start*/
	$(document).on("click", '#myonoffswitch17', function () {
		if (this.checked) {
			$('body').addClass('hover-submenu');
			hovermenu();
			$('body').addClass('main-sidebar-hide');
			$('body').removeClass('hover-submenu1');
			$('body').removeClass('default-menu');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('icontext-menu');
			localStorage.setItem("spruhahoversubmenu", true);
			localStorage.removeItem("spruhadefaultmenu");
			localStorage.removeItem("spruhaicontext");
			localStorage.removeItem("spruhaiconoverlay");
			localStorage.removeItem("spruhaclosed");
			localStorage.removeItem("spruhahoversubmenustyle1");
		}
	});
	/*Hover Submenu End*/

	/*Hover Submenu Style 1 Start*/
	$(document).on("click", '#myonoffswitch18', function () {
		if (this.checked) {
			$('body').addClass('hover-submenu1');
			hovermenu();
			$('body').addClass('main-sidebar-hide');
			$('body').removeClass('hover-submenu');
			$('body').removeClass('default-menu');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('icontext-menu');
			localStorage.setItem("spruhahoversubmenustyle1", true);
			localStorage.removeItem("spruhadefaultmenu");
			localStorage.removeItem("spruhaicontext");
			localStorage.removeItem("spruhaiconoverlay");
			localStorage.removeItem("spruhaclosed");
			localStorage.removeItem("spruhahoversubmenu");
		}
	});
	/*Hover Submenu Style 1 End*/

	/* Vertical Menu Start */
	$(document).on("click", '#myonoffswitch01', function () {
		if (this.checked) {
			$('body').addClass('leftmenu');
			$('body').addClass('main-body');
			$('body').removeClass('horizontalmenu');
			$('body').removeClass('horizontalmenu-hover');
			$('.main-content').addClass('side-content');
			$('.main-header').removeClass(' hor-header');
			$('.main-header').addClass('sticky');
			$('.main-content').removeClass('hor-content');
			$('.main-container').removeClass('container');
			$('.main-container-1').removeClass('container');
			$('.main-container').addClass('container-fluid');
			$('.main-menu').removeClass('main-navbar hor-menu ');
			$('.main-menu').addClass('main-sidebar main-sidebar-sticky side-menu');
			$('.main-container-1').addClass('main-sidebar-header');
			$('.main-body-1').addClass('main-sidebar-body');
			$('.menu-icon').addClass('sidemenu-icon');
			$('.menu-icon').removeClass('hor-icon');

			document.querySelector(".menu-nav").style.marginLeft = "0px";
  			document.querySelector(".menu-nav").style.marginRight = "0px";

			// HorizontalHovermenu();
			// ActiveSubmenu();
			var position = window.location.pathname.split('/');
			$(".main-menu li a").each(function () {
				var $this = $(this);
				var pageUrl = $this.attr("href");
				if (pageUrl) {
					if (position[position.length - 1] == pageUrl) {
						$(this).addClass("active");
						$(this).parent().prev().addClass("active"); // add active to li of the current link
						$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
						$(this).parent().parent().parent().parent().prev().addClass("active");
						$(this).parent().parent().parent().parent().parent().addClass("is-expanded");
						$(this).parent().parent().prev().click(); // click the item to make it drop
						$(this).parent().parent().slideDown(300, function () { });
						$(this).parent().parent().parent().parent().slideDown(300, function () { });
						$(this).parent().parent().parent().parent().slideDown(300, function () { });
						return false;
					}
				}
			})
			// responsive();
			localStorage.setItem("spruhavertical", true);
			localStorage.removeItem("spruhahorizontalmenu");
			localStorage.removeItem("spruhahorizontalmenuhover");

		}
	});
	/* Vertical Menu End */

	/* Horizontal Menu Start */
	$(document).on("click", '#myonoffswitch02', function () {
		if (this.checked) {
			if (window.innerWidth >= 992) {
				let subNavSub = document.querySelectorAll('.sub-nav-sub');
				subNavSub.forEach((e) => {
					e.style.display = '';
				})
				let subNav = document.querySelectorAll('.nav-sub')
				subNav.forEach((e) => {
					e.style.display = '';
				})
			}
			$('body').addClass('horizontalmenu');
			$('body').removeClass('horizontalmenu-hover');
			$('body').removeClass('leftmenu');
			$('body').removeClass('main-body');
			$('.main-content').addClass('hor-content');
			$('.main-header').addClass('hor-header');
			$('.main-header').removeClass('sticky');
			$('.main-content').removeClass('side-content');
			$('.main-container-1').addClass('container');
			$('.main-container-1').removeClass('main-sidebar-header');
			$('.main-menu').addClass('main-navbar hor-menu');
			$('.main-menu').removeClass('main-sidebar main-sidebar-sticky side-menu');
			$('.main-body-1').removeClass('main-sidebar-body');
			$('.menu-icon').removeClass('sidemenu-icon');
			$('.menu-icon').addClass('hor-icon');
			$('body').removeClass('default-menu');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('icontext-menu');
			$('body').removeClass('main-sidebar-hide');
			$('body').removeClass('main-sidebar-open');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('hover-submenu');
			$('body').removeClass('hover-submenu1');
			// HorizontalHovermenu();
			localStorage.removeItem("spruhavertical");
			localStorage.setItem("spruhahorizontalmenu", true);
			localStorage.removeItem("spruhahorizontalmenuhover");
			if (document.querySelector('body').classList.contains('horizontalmenu') && !document.querySelector('body').classList.contains('error-1')) {
				checkHoriMenu();
				responsive();
			}
			if (!document.querySelector('.horizontalmenu').classList.contains('error-1')) {
				$(".main-container").addClass("container");
				$(".main-container").removeClass("container-fluid");
			}
		}
	});
	/*Horizontal Menu End */

	/* Horizontal Hover Menu Start */
	$(document).on("click", '#myonoffswitch03', function () {
		if (this.checked) {
			if (window.innerWidth >= 992) {
				let subNavSub = document.querySelectorAll('.sub-nav-sub');
				subNavSub.forEach((e) => {
					e.style.display = '';
				})
				let subNav = document.querySelectorAll('.nav-sub')
				subNav.forEach((e) => {
					e.style.display = '';
				})
			}
			$('body').addClass('horizontalmenu');
			$('body').addClass('horizontalmenu-hover');
			$('body').removeClass('leftmenu');
			$('body').removeClass('main-body');
			$('.main-content').addClass('hor-content');
			$('.main-header').addClass('hor-header');
			$('.main-header').removeClass('sticky');
			$('.main-content').removeClass('side-content');
			$('.main-container-1').addClass('container');
			$('.main-menu').addClass('main-navbar hor-menu');
			$('.main-menu').removeClass('main-sidebar main-sidebar-sticky side-menu');
			$('.main-container-1').removeClass('main-sidebar-header');
			$('.main-body-1').removeClass('main-sidebar-body');
			$('.menu-icon').removeClass('sidemenu-icon');
			$('.menu-icon').addClass('hor-icon');
			$('body').removeClass('default-menu');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('icontext-menu');
			$('body').removeClass('main-sidebar-hide');
			$('body').removeClass('main-sidebar-open');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('hover-submenu');
			$('body').removeClass('hover-submenu1');
			if (document.querySelector('body').classList.contains('horizontalmenu') && !document.querySelector('body').classList.contains('error-1')) {
				checkHoriMenu();
				responsive();
			}
			if (!document.querySelector('.horizontalmenu').classList.contains('error-1')) {
				$(".main-container").addClass("container");
				$(".main-container").removeClass("container-fluid");
			}
			localStorage.removeItem("spruhavertical");
			localStorage.removeItem("spruhahorizontalmenu");
			localStorage.setItem("spruhahorizontalmenuhover", true);
		}
	});
	/* Horizontal Hover Menu End */


	/* LTR version Start */
	$(document).on("click", '#myonoffswitch19', function () {
		if (this.checked) {
			$('body').addClass('ltr');
			$('body').removeClass('rtl');
			$("html[lang=en]").attr("dir", "ltr");
			$("head link#style").attr("href", $(this));
			(document.getElementById("style").setAttribute("href", "http://127.0.0.1:8000/build/assets/plugins/bootstrap/css/bootstrap.min.css"));
			var carousel = $('.owl-carousel');
			$.each(carousel, function (index, element) {
				// element == this
				var carouselData = $(element).data('owl.carousel');
				carouselData.settings.rtl = false; //don't know if both are necessary
				carouselData.options.rtl = false;
				$(element).trigger('refresh.owl.carousel');
			});

			localStorage.removeItem("spruhartl");
			localStorage.setItem("spruhaltr", true);
		}
	});
	/* LTR version End */

	/* RTL version Start */
	$(document).on("click", '#myonoffswitch20', function () {
		if (this.checked) {
			$('body').addClass('rtl');
			$('body').removeClass('ltr');
			$("html[lang=en]").attr("dir", "rtl");
			$("head link#style").attr("href", $(this));
			(document.getElementById("style").setAttribute("href", "http://127.0.0.1:8000/build/assets/plugins/bootstrap/css/bootstrap.rtl.min.css"));
			var carousel = $('.owl-carousel');
			$.each(carousel, function (index, element) {
				// element == this
				var carouselData = $(element).data('owl.carousel');
				carouselData.settings.rtl = true; //don't know if both are necessary
				carouselData.options.rtl = true;
				$(element).trigger('refresh.owl.carousel');
			});

			localStorage.removeItem("spruhaltr");
			localStorage.setItem("spruhartl", true);
		}
	});
	/* RTL version End */


	/***************** CLOSEDMENU HAs Class *********************/
	let bodyclosed = $('body').hasClass('closed-leftmenu');
	if (bodyclosed) {
		$('body').addClass('closed-leftmenu');
		if (!(document.querySelector('body').classList.contains('error-page'))) {
			hovermenu();
		}
		$('body').addClass('main-sidebar-hide');
	}
	/***************** CLOSEDMENU HAs Class *********************/

	/***************** ICONTEXT MENU HAs Class *********************/
	let bodyicontext = $('body').hasClass('icontext-menu');
	if (bodyicontext) {
		$('body').addClass('icontext-menu');
		if (!(document.querySelector('body').classList.contains('error-page'))) {
			icontext();
		}
		$('body').addClass('main-sidebar-hide');
	}
	/***************** ICONTEXT MENU HAs Class *********************/

	/***************** ICONOVERLAY MENU HAs Class *********************/
	let bodyiconoverlay = $('body').hasClass('icon-overlay');
	if (bodyiconoverlay) {
		$('body').addClass('icon-overlay');
		if (!(document.querySelector('body').classList.contains('error-page'))) {
			hovermenu();
		}
		$('body').addClass('main-sidebar-hide');
	}
	/***************** ICONOVERLAY MENU HAs Class *********************/

	/***************** HOVER-SUBMENU HAs Class *********************/
	let bodyhover = $('body').hasClass('hover-submenu');
	if (bodyhover) {
		$('body').addClass('hover-submenu');
		if (!(document.querySelector('body').classList.contains('error-page'))) {
			hovermenu();
		}
		$('body').addClass('main-sidebar-hide');
	}
	/***************** HOVER-SUBMENU HAs Class *********************/

	/***************** HOVER-SUBMENU HAs Class *********************/
	let bodyhover1 = $('body').hasClass('hover-submenu1');
	if (bodyhover1) {
		$('body').addClass('hover-submenu1');
		if (!(document.querySelector('body').classList.contains('error-page'))) {
			hovermenu();
		}
		$('body').addClass('main-sidebar-hide');
	}
	/***************** HOVER-SUBMENU HAs Class *********************/

}
switcherEvents();

let reset = document.querySelector('#resetAll');
if (reset) {
    reset.addEventListener('click', () => {
        resetData();
    })
}

function resetData() {
	localStorage.clear();
	document.querySelector('html').style = '';
	names();
	$('#myonoffswitch5').prop('checked', true);
	$('#myonoffswitch6').prop('checked', true);
	$('#myonoffswitch1').prop('checked', true);
	$('#myonoffswitch9').prop('checked', true);
	$('#myonoffswitch11').prop('checked', true);
	$('#myonoffswitch13').prop('checked', true);
	$('#myonoffswitch19').prop('checked', true);
	$('#myonoffswitch01').prop('checked', true);
	$('body')?.removeClass('dark-theme');
	$('body')?.addClass('dark-menu');
	$('body')?.removeClass('light-menu');
	$('body')?.removeClass('color-menu');
	$('body')?.removeClass('header-dark');
	$('body')?.removeClass('header-light');
	$('body')?.removeClass('color-header');
	$('body')?.removeClass('layout-boxed');
	$('body')?.removeClass('icontext-menu');
	$('body')?.removeClass('icon-overlay');
	$('body')?.removeClass('closed-leftmenu');
	$('body')?.removeClass('hover-submenu');
	$('body')?.removeClass('hover-submenu1');
	$('body')?.removeClass('scrollable-layout');
	$('body')?.removeClass('fixed-layout');
	$('body')?.removeClass('main-sidebar-hide');

	document.querySelector(".menu-nav").style.marginLeft = "0px";
  	document.querySelector(".menu-nav").style.marginRight = "0px";


	$('body').addClass('leftmenu');
	$('body').addClass('main-body');
	$('body').removeClass('horizontalmenu');
	$('body').removeClass('horizontalmenu-hover');
	$('.main-content').addClass('side-content');
	$('.main-header').removeClass(' hor-header');
	$('.main-header').addClass('sticky');
	$('.main-content').removeClass('hor-content');
	$('.main-container').removeClass('container');
	$('.main-container-1').removeClass('container');
	$('.main-container').addClass('container-fluid');
	$('.main-menu').removeClass('main-navbar hor-menu ');
	$('.main-menu').addClass('main-sidebar main-sidebar-sticky side-menu');
	$('.main-container-1').addClass('main-sidebar-header');
	$('.main-body-1').addClass('main-sidebar-body');
	$('.menu-icon').addClass('sidemenu-icon');
	$('.menu-icon').removeClass('hor-icon');
	// HorizontalHovermenu();
	// ActiveSubmenu();
	var position = window.location.pathname.split('/');
	$(".main-menu li a").each(function () {
		alert("DFdfd");
		var $this = $(this);
		var pageUrl = $this.attr("href");
		if (pageUrl) {
			if (position[position.length - 1] == pageUrl) {
				$(this).addClass("active");
				$(this).parent().prev().addClass("active"); // add active to li of the current link
				$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
				$(this).parent().parent().parent().parent().prev().addClass("active");
				$(this).parent().parent().parent().parent().parent().addClass("is-expanded");
				$(this).parent().parent().prev().click(); // click the item to make it drop
				$(this).parent().parent().slideDown(300, function () { });
				$(this).parent().parent().parent().parent().slideDown(300, function () { });
				$(this).parent().parent().parent().parent().slideDown(300, function () { });
				return false;
			}
		}
	})
	// responsive();
	localStorage.setItem("spruhavertical", true);
	localStorage.removeItem("spruhahorizontalmenu");
	localStorage.removeItem("spruhahorizontalmenuhover");

	$('body').addClass('ltr');
	$('body').removeClass('rtl');
	$("html[lang=en]").attr("dir", "ltr");
	$("head link#style").attr("href", $(this));
	(document.getElementById("style").setAttribute("href", "http://127.0.0.1:8000/build/assets/plugins/bootstrap/css/bootstrap.min.css"));
	var carousel = $('.owl-carousel');
	$.each(carousel, function (index, element) {
		// element == this
		var carouselData = $(element).data('owl.carousel');
		carouselData.settings.rtl = false; //don't know if both are necessary
		carouselData.options.rtl = false;
		$(element).trigger('refresh.owl.carousel');
	});

	localStorage.removeItem("spruhartl");
	localStorage.setItem("spruhaltr", true);

}
(function () {
	"use strict";

	$(document).ready(function () {

		//On ready function for Horizontal Menu Start
		let bodyhorizontal = $('body').hasClass('horizontalmenu');
		if (bodyhorizontal) {
			if (window.innerWidth >= 992) {
				let subNavSub = document.querySelectorAll('.sub-nav-sub');
				subNavSub.forEach((e) => {
					e.style.display = '';
				})
				let subNav = document.querySelectorAll('.nav-sub')
				subNav.forEach((e) => {
					e.style.display = '';
				})
			}
			$('body').addClass('horizontalmenu');
			$('body').removeClass('horizontalmenu-hover');
			$('body').removeClass('leftmenu');
			$('body').removeClass('main-body');
			$('.main-content').addClass('hor-content');
			$('.main-header').addClass('hor-header');
			$('.main-header').removeClass('sticky');
			$('.main-content').removeClass('side-content');
			$('.main-container-1').addClass('container');
			$('.main-menu').addClass('main-navbar hor-menu');
			$('.main-menu').removeClass('main-sidebar main-sidebar-sticky side-menu');
			$('.main-container-1').removeClass('main-sidebar-header');
			$('.main-body-1').removeClass('main-sidebar-body');
			$('.menu-icon').removeClass('sidemenu-icon');
			$('.menu-icon').addClass('hor-icon');
			$('body').removeClass('default-menu');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('icontext-menu');
			$('body').removeClass('main-sidebar-hide');
			$('body').removeClass('main-sidebar-open');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('hover-submenu');
			$('body').removeClass('hover-submenu1');
			// HorizontalHovermenu();
			if (document.querySelector('body').classList.contains('horizontalmenu') && !document.querySelector('body').classList.contains('error-1')) {
				checkHoriMenu();
				responsive();
			}
			if (!document.querySelector('.horizontalmenu').classList.contains('error-1')) {
				$(".main-container").addClass("container");
				$(".main-container").removeClass("container-fluid");
			}
		}
		//On ready function for Horizontal Menu End


		function light() {
			// if (localStorage.getItem("dark-menu") == null || localStorage.getItem("dark-menu") == undefined) {
			// 	localStorage.setItem("spruhadark-menu", "true")
			// }

			if (document.querySelector('body').classList.contains('light-theme')) {
				$('#myonoffswitch5').prop('checked', true);
				$('#myonoffswitch6').prop('checked', true);
			}

			if (localStorage.getItem("dark-menu") == 'true') {
				document.querySelector('body')?.classList.add('dark-menu')
			}
			else {
				document.querySelector('body')?.classList.remove('dark-menu')
			}
		}
		light();


		let bodyhorizontalHover = $('body').hasClass('horizontalmenu-hover');
		if (bodyhorizontalHover) {
			if (window.innerWidth >= 992) {
				let subNavSub = document.querySelectorAll('.sub-nav-sub');
				subNavSub.forEach((e) => {
					e.style.display = '';
				})
				let subNav = document.querySelectorAll('.nav-sub')
				subNav.forEach((e) => {
					e.style.display = '';
				})
			}
			$('body').addClass('horizontalmenu');
			$('body').addClass('horizontalmenu-hover');
			$('body').removeClass('leftmenu');
			$('body').removeClass('main-body');
			$('.main-content').addClass('hor-content');
			$('.main-header').addClass('hor-header');
			$('.main-header').removeClass('sticky');
			$('.main-content').removeClass('side-content');
			$('.main-container-1').addClass('container');
			$('.main-menu').addClass('main-navbar hor-menu');
			$('.main-menu').removeClass('main-sidebar main-sidebar-sticky side-menu');
			$('.main-container-1').removeClass('main-sidebar-header');
			$('.main-body-1').removeClass('main-sidebar-body');
			$('.menu-icon').removeClass('sidemenu-icon');
			$('.menu-icon').addClass('hor-icon');
			$('body').removeClass('default-menu');
			$('body').removeClass('closed-leftmenu');
			$('body').removeClass('icontext-menu');
			$('body').removeClass('main-sidebar-hide');
			$('body').removeClass('main-sidebar-open');
			$('body').removeClass('icon-overlay');
			$('body').removeClass('hover-submenu');
			$('body').removeClass('hover-submenu1');
			if (document.querySelector('body').classList.contains('horizontalmenu') && !document.querySelector('body').classList.contains('error-1')) {
				checkHoriMenu();
				responsive();
			}
			if (!document.querySelector('.horizontalmenu').classList.contains('error-1')) {
				$(".main-container").addClass("container");
				$(".main-container").removeClass("container-fluid");
			}
		}

		let bodyRtl = $('body').hasClass('rtl');
		if (bodyRtl) {
			$('body').addClass('rtl');
			$('body').removeClass('ltr');
			$("html[lang=en]").attr("dir", "rtl");
			$("head link#style").attr("href", $(this));
			(document.getElementById("style").setAttribute("href", "http://127.0.0.1:8000/build/assets/plugins/bootstrap/css/bootstrap.rtl.min.css"));
			var carousel = $('.owl-carousel');
			$.each(carousel, function (index, element) {
				// element == this
				var carouselData = $(element).data('owl.carousel');
				carouselData.settings.rtl = true; //don't know if both are necessary
				carouselData.options.rtl = true;
				$(element).trigger('refresh.owl.carousel');
			});
			$(".fc-theme-standard ").addClass("fc-direction-rtl");
			$(".fc-theme-standard ").removeClass("fc-direction-ltr");
			$(".fc-header-toolbar ").addClass("fc-toolbar-rtl");
			$(".fc-header-toolbar ").removeClass("fc-toolbar-ltr");

		}
	});

})()


let myVarVal, primaryColorVal;
function names() {

	let docStyle = getComputedStyle(document.documentElement);
	primaryColorVal = getComputedStyle(document.documentElement).getPropertyValue('--primary-bg-color').trim();

	//get variable
	myVarVal = localStorage.getItem("spruhaprimaryColor") || localStorage.getItem("spruhadarkPrimary") || primaryColorVal;

	if (document.querySelector('#project') !== null) {
		index(myVarVal, hexToRgba);
	}

	if (document.querySelector('#bar-chart') !== null) {
		barchart(myVarVal, hexToRgba);
	}

	if (document.querySelector('.forth.circle') !== null) {
		forthcircle(myVarVal, hexToRgba);
	}

	if (document.querySelector('#btc_chart') !== null) {
		btcchart(myVarVal, hexToRgba);
	}

	if (document.querySelector('#cryptoChart2') !== null) {
		cryptoChart2(myVarVal, hexToRgba);
	}

	if (document.querySelector('#sparkline11') !== null) {
		spark1(myVarVal, hexToRgba);
	}

	if (document.querySelector('#sparkline12') !== null) {
		spark2(myVarVal, hexToRgba);
	}

	if (document.querySelector('#sparkline13') !== null) {
		spark3(myVarVal, hexToRgba);
	}

	if (document.querySelector('#sparkline14') !== null) {
		spark4(myVarVal, hexToRgba);
	}

	if (document.querySelector('#crypto-donut') !== null) {
		cryptodonut(myVarVal, hexToRgba);
	}

	if (document.querySelector('#revenuechart') !== null) {
		revenuechart(myVarVal, hexToRgba);
	}

	if (document.querySelector('#recentorders') !== null) {
		recentorders(myVarVal, hexToRgba);
	}

	if (document.querySelector('#world-map-markers') !== null) {
		vectormap(myVarVal, hexToRgba);
	}


	let colorData = hexToRgba(myVarVal || primaryColorVal, 0.05)
	document.querySelector('html').style.setProperty('--primary005', colorData);

	let colorData1 = hexToRgba(myVarVal || primaryColorVal, 0.2)
	document.querySelector('html').style.setProperty('--primary02', colorData1);

	let colorData2 = hexToRgba(myVarVal || primaryColorVal, 0.3)
	document.querySelector('html').style.setProperty('--primary03', colorData2);

	let colorData5 = hexToRgba(myVarVal || primaryColorVal, 0.5)
	document.querySelector('html').style.setProperty('--primary05', colorData5);

	let colorData3 = hexToRgba(myVarVal || primaryColorVal, 0.7)
	document.querySelector('html').style.setProperty('--primary07', colorData3);

	let colorData4 = hexToRgba(myVarVal || primaryColorVal, 0.8)
	document.querySelector('html').style.setProperty('--primary08', colorData4);

	let colorData6 = hexToRgba(myVarVal || primaryColorVal, 0.1)
	document.querySelector('html').style.setProperty('--primary01', colorData6);


}
names()
