const navigation = () => {
	const navigation = document.querySelector('.navigation');
	const navigationButton = document.querySelector('.navigation .navigation-mobile');

	if (navigation === undefined)
		return;

	navigationButton.addEventListener('click', (event) => {
		navigation.classList.toggle('true');
	});
}

navigation();
