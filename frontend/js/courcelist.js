var tabs = new Vue({
        el: '#app2',
        data: {
//            title: 'test' FOR Vue.js test
            courses: [] 
        },
    created: function () {
        this.$http.get('../../backend/data/crud/cource.php').then(response => {
            // success callback
            this.courses = response.body;
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