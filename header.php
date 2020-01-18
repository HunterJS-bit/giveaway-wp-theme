<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nagrada
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="w-full absolute z-10">
		<div class="container mx-auto px-6 flex flex-wrap items-center justify-between md:flex-wrap p-4">
			<a href="/">
				<div class="flex items-center text-white mr-6" >
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="40px" viewBox="5 0 210 40" enable-background="new 0 0 200 40" xml:space="preserve">  <image id="image0" width="200" height="40" x="0" y="0"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVgAAAAoCAMAAACM5xIHAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABg1BMVEUAAAAAdr8Ac7sAcrwA
crwAcrwAcrwAcbsAgL8AcboAcrwAcrwAcrwAcr0Ac70AcrwAcrwAc7wAcrwAcrwAcrwAcbwAcb0A
dL0AgL8AcrwAcrwAcrwAcrwAcrwAcbwAgIAAc7wAcrwAc70AcbsAZrMAcr4AcbwAcbwAcrwAcbwA
crwAcrwAcL8AcrwAcrwAcrwAc7wAbbYAc7wAcrwAcrwAc7wAcrwAgKoAcrwAc78Acr0AcbwAcL0A
dLkAcrsAcrwAcr0AcrsAdLsAcbsAcrwAcrsAar8AcrwAcb0Ac7wAcrwAcrsAc7wAcbwAcrwAcrsA
crwAdb8AcrwAc7wAc70AcL8AcbwAc7kAcr0AdroAcrwAcbgAcb0AcrwAdLwAcrwAc7wAcrsAcr4A
cb0Acr0Acb0AcrsAcr0Ac7wAcr0AcLoAcrwAcrwAcrsAcbwAc7sAbrsAcrsAcbwAcb8AcbwAcrsA
cbwAc7sAc7wAdLkAcb0Ac7sAc70AcbwAcrwAcrz///8erH+tAAAAf3RSTlMAHJff992hVgg0s+n7
04MmTLvv/fPjh0IEndX54cF+Ana3qVoKSoW92dGjXBBym+eBDlDJr1T1BokUOqsyFrXH149AfM1i
DPFsz+s4KkTli8MYbpU+ICIopRqREjaNLu2nk05ocEZeYGZ0MMufsb88HttIJGq5mXh6LK1SZFjF
G5DQOQAAAAFiS0dEgGW9nmgAAAAHdElNRQfjCAwJIjnRxMJSAAANv0lEQVRo3u1aeUMTPRMPUORq
AbvlLFgQ5LICFSg3iArlFpRTkD6CCK+KAuKjPor56u9M7s1m8QuQf5pmMzO/mSRzZJeQ23bbbttt
C2sFhUWR4jslpdgvK6+Ixiqr5KPqu3EvUXO3tq5eza5raEwkm5rvlfl4pMpaWpsikaL7bSk9GKRu
f9DR2RWPxrt7Hqb/Lr6g+lFvc2NfMtHYnzGFPR5I9A2W1N+AxwknjB2pH+opimQbCx8M/1Unt/Yh
du2jrMVHRslYhPfHCxjnXipbvGeCTZ6cUkPT1YpFVW2NGn4yIXEFqOt6smqIJmYyN4gvffpsqkJP
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
NjozNDo1Ny0wNzowMMfCRYgAAAAASUVORK5CYII=" />
</svg>
				</div>
			</a>
			<div class="block sm:hidden">
				<button id="menu-button" class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-gray-600 hover:border-gray-400">
					<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="fill-current h-3 w-3">
						<title>Menu</title>
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
					</svg>
				</button>
			</div>
				
			<div id="main-menu" class="w-full flex-grow sm:flex sm:items-center sm:w-auto hidden justify-end text-base text-white font-bold">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'      => 'text-sm sm:flex-grow',
						'add_li_class'  => 'menu-item no-underline block mr-8 sm:inline-block sm:mt-0 tracking-widest text-base uppercase'
					) );
					?>
					<a href="/blog" class="bg-blue-500 py-2 px-5 rounded tracking-widest text-white font-bold uppercase">Prijavi se</a>
		
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
