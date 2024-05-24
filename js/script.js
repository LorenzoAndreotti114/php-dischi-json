const {createApp} = Vue

createApp ({

    data() {
        return {

            disks: []

        }
    },
    created() {
        axios
            .get("http://localhost/boolean/php-dischi-json/server.php")
            .then((resp) => {
                this.disks = resp.data.results;

                console.log(this.disks);
            })
    }

}).mount('#app')