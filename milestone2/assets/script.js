// Javascript

new Vue({
    el: "#app",
    data: {
        albums: [],

    },
    created(){
       axios("http://localhost/php-ajax-dischi/milestone2/api/")
        .then(response => this.albums = response.data)
    }


});