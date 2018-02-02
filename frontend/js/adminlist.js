var tabs = new Vue({
        el: '#app1',
        data: {
            title: 'test',
            administrators: []
        },
    created: function () {
        this.$http.get('../../backend/data/crud/admin.php').then(response => {
            // success callback
            this.administrators = response.body;
        }, error => {
            // error callback
            console.log(error);
        });
    },
    methods: {
        changeText: function()  {
            this.title = this.title + ' change';
        }
    }
    });