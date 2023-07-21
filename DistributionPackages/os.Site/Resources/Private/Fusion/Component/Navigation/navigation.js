const navigation = () => {
	const navigation = document.querySelector('.navigation');
	const navigationButton = document.querySelector('.navigation .navigation-mobile');

	if (navigation === undefined || navigation === null)
		return;

	navigationButton.addEventListener('click', (event) => {
		navigation.classList.toggle('true');
	});
}

navigation();
