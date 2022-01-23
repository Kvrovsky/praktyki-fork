<script>
    import { createEventDispatcher} from 'svelte';
    import {fly, fade} from 'svelte/transition';

    const dispatch = createEventDispatcher();

    function close(){
        dispatch('closeIt');
    }


</script>


<div  class="popup">
    <div class="close-btn">&times;</div>
    <div class="form">
       <h2>Login</h2>
       <div class="form-element">
           <label for="email">Email</label>
           <input type="text" id="email" placeholder="Enter Email">
       </div>
       <div class="form-element">
           <label for="password">Password</label>
           <input type="text" id="password" placeholder="Enter Password">
       </div>
       <div class="form-element">
           <input type="checkbox" id="remember-me">
           <label for="remember-me">Remember me</label>
       </div>
       <div class="form-element">
           <button on:closeIt={close}>Sign in</button>
       </div>
       <div class="form-element">
           <a href="#">Forgot Password?</a>
       </div>
    </div>
</div>

<style>
    #login{
		font-size: 20px;
		float:right;
		cursor: pointer;
		border-radius: 5px;
	}
	.popup{
		position: absolute;
		top:50%;
		left:50%;
		opacity: 0;
		transform: translate(-50%,-50%) scale(1.25);
		width: 380px;
		padding:20px 30px;
		background: #fff;
		box-shadow: 2px 2px 5px 5px rgba(0,0,0,0.15);
		border-radius: 10px;
		transition:
		top 0ms ease-in-out 200ms,
		opacity 0ms ease-in-out 200ms,
		transform 0ms ease-in-out 200ms;
	}
	.popup.active{
		top:50%;
		opacity: 1;
		transform: translate(-50%,-50%) scale(1);
		transition:
		top 0ms ease-in-out 200ms,
		opacity 0ms ease-in-out 200ms,
		transform 0ms ease-in-out 200ms;
	}
	.popup .close-btn{
		position: absolute;
		top:10px;
		right: 10px;
		width: 15px;
		height: 15px;
		background: #888;
		color: #eee;
		text-align: center;
		line-height: 15px;
		border-radius: 15px;
		cursor: pointer;
	}
	.popup .form h2{
		text-align: center;
		color: #222;
		margin: 10px 0px 20px;
		font-size: 25px;
	}
	.popup .form .form-element{
		margin: 15px 0px;
	}
	.popup .form .form-element label{
		font-size: 14px;
		color:#222;
	}
	.popup .form .form-element input[type="text"],
	.popup .form .form-element input[type="password"]{
		margin-top: 5px;
		display: block;
		width: 100%;
		padding: 10px;
		outline: none;
		border:1px solid #aaa;
		border-radius: 5px;
	}
	.popup .form .form-element input[type="checkbox"]{
		margin-right: 5px;
	}
	.popup .form .form-element button{
		width: 100%;
		height: 40px;
		border:none;
		outline: none;
		font-size: 16px;
		background: #222;
		color: #363732;
		border-radius: 10px;
		cursor: pointer;
	}
	.popup .form .form-element a{
		display: block;
		text-align: right;
		font-size: 15px;
		color: #363732;
		text-decoration: none;
		font-weight: 600;
	}
</style>