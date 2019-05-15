<template>
  <view class="container">
		<view class="container-logo">
			<image
				:style="{width: 310, height: 45}"
			 	:source="require('/mobileApps/MovvingCRM/assets/logo.png')"/>
		</view>
		<view class="container-login">
			<view class="form-control">
					<text-input
					placeholder="Your Email"
	        v-model="emailInput"
					class="form-input"
	      />
			</view>
			<view class="form-control">
					<text-input
					placeholder="Your Password"
	        v-model="passwordInput"
					class="form-input"
	      />
			</view>
			<button
				:on-press="onPressLogin"
        title="Login"
				color="#4D897C"
				class="btn-login"
    />
		</view>

  </view>
</template>

<script>
export default {
	props: {
			navigation: {
				type: Object
			}
		},
	data: function() {
            return {
                emailInput: '',
								passwordInput: ''
            };
        },
    methods: {
        onPressLogin: function() {
            this.navigation.navigate("loginScreen");
        }
    }
}
</script>

<style>
.btn-login {
	background-color: #4D897C;
	color:white;
	font-weight: bold;
	border-radius: 25;
	padding-top: 14;
	padding-bottom: 14;
	text-transform: uppercase;
	letter-spacing: 0.1;

}

.form-control {
	margin-bottom: 30;
	padding-bottom: 5;
	border-bottom-width: 1;
	border-bottom-color: #4D897C;
	font-size: 20;
}

.form-input {
	color: #4D897C;
	width: 280;
}
.container {
  background-color: white;
  align-items: center;
  justify-content: center;
  flex: 1;
}
.container-logo {
	margin-bottom: 100;
}
.container-login {
	margin-right: 34;
	margin-left: 34;
}
</style>
