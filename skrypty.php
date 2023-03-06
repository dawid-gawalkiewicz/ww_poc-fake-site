<!--expand/collapse main navigation-->
<script>
	window.onload = function() {
		const menuBurger = document.querySelector(".menu-burger");
		const mainMenu = document.querySelector("#nawigacja #menu-mainmenu");
		menuBurger.addEventListener('click', function(){
			mainMenu.classList.toggle('menuisopen');
		})
	}
</script>