const { createApp } = Vue;

createApp({
    data() {
        return {
                apiUrl : './server.php',
                items : [],
                activeInfo: false,
                info: '',
        }
    },

    methods: {
        getItems(){
            axios.get(this.apiUrl, {
                params: {}
            })
            .then((response)=> {
                // console.log(response);
                this.items = response.data;
            })
            .catch(function (error) {
                console.log(error);
            })
        },
        
        moreInfo(index) {
            this.activeInfo = !this.activeInfo;
            this.info = this.items[index];
        },

    },

    created() {
        this.getItems();
    },
}).mount('#app');