new Vue({
	el: '#root',
	data: {
		dischi: [],
		urlDatabase: 'API/dischiAPI.php',
	},
	created() {
		axios.get(this.urlDatabase)
			.then(axiosResponse => this.dischi = axiosResponse.data);
    }
})