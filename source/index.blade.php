
@extends('_layouts.master')

{{-- https://laravel.com/docs/5.4/blade#stacks --}}
@push('head')


    @section('title', ' Discord Templates')

    {{-- https://laravel.com/docs/5.4/blade#template-inheritance --}}
    @section('body')
<div class="popup">
	<h1>👋</h1>
	<h2>Heya! This site is under construction.</h2>
	<p>Feel free to have a chat with us while we're working on the page! We'd love to have your thoughts included in the newest version.</p>
	<div class="btn-container">
		<a href="https://discord.gg/8kSnjNN" class="btn">Join Discord</a>
		<button class="btn ghost" id="trick">
			No. Not for me!
			<span>Don't click me</span>
		</button>
	</div>
</div>


<script>
	const trickBtn = document.getElementById('trick');
const btnContainer = document.querySelector('.btn-container');
// setting it initially
btnContainer.style.flexDirection = 'row';

trickBtn.addEventListener('mouseover', (e) => {
	const currentDir = btnContainer.style.flexDirection;
	if(currentDir === 'row') {
		btnContainer.style.flexDirection = 'row-reverse';
	} else {
		btnContainer.style.flexDirection = 'row';
	}
})
</script>
<style>
	@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}

body {
	background-color: #3498db;
	display: flex;
	align-items: center;
	font-family: 'Muli', sans-serif;
	justify-content: center;
	height: 100vh;
	margin: 0;
}

.popup{
	background-color: #fff;
	box-shadow: -4px 4px 5px rgba(0, 0, 0, 0.3);
	border-radius: 5px;
	padding: 20px 30px;
	text-align: center;
	max-width: 500px;
}

.popup p {
	color: #555;
}

.btn-container {
	display: flex;
	align-items: center;
	justify-content: center;
}

.btn {
	background-color: #3498db;
	border: 0;
	border-radius: 5px;
	box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
	color: #fff;
	cursor: pointer;
	font-size: 18px;
	padding: 15px 30px;
	position: relative;
	margin: 10px;
}

.btn:active {
	box-shadow: none;
	transform: scale(0.98);
}

.btn:focus {
	outline: none;
}

.btn.ghost {
	background-color: #fff;
	color: #3498db;
	box-shadow: none;
}

.btn.ghost span {
	background-color: #3498db;
	border: 0;
	border-radius: 5px;
	color: #fff;
	font-size: 10px;
	padding: 3px 7px;
	position: absolute;
	top: -10px;
	right: -10px;
	transform: rotate(10deg);
}

.popup img {
	width: 70px;
}











/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
	transform: translateX(-10px);
}

.social-panel {	
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
	border: 5px solid #001F61;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: 'Muli';
	position: relative;
	height: 169px;	
	width: 370px;
	max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
	border: 0;
	color: #97A5CE;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}

.social-panel button.close-btn:focus {
	outline: none;
}

.social-panel p {
	background-color: #001F61;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}

.social-panel p i {
	margin: 0 5px;
}

.social-panel p a {
	color: #FF7500;
	text-decoration: none;
}

.social-panel h4 {
	margin: 20px 0;
	color: #97A5CE;	
	font-family: 'Muli';	
	font-size: 14px;	
	line-height: 18px;
	text-transform: uppercase;
}

.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.social-panel ul li {
	margin: 0 10px;
}

.social-panel ul li a {
	border: 1px solid #DCE1F2;
	border-radius: 50%;
	color: #001F61;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}

.social-panel ul li a:hover {
	border-color: #FF6A00;
	box-shadow: 0 9px 12px -9px #FF6A00;
}

.floating-btn {
	border-radius: 26.5px;
	background-color: #001F61;
	border: 1px solid #001F61;
	box-shadow: 0 16px 22px -17px #03153B;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	line-height: 20px;
	padding: 12px 20px;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 999;
}

.floating-btn:hover {
	background-color: #ffffff;
	color: #001F61;
}

.floating-btn:focus {
	outline: none;
}

.floating-text {
	background-color: #001F61;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}

.floating-text a {
	color: #FF7500;
	text-decoration: none;
}

@media screen and (max-width: 480px) {

	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}
</style>

@endsection
