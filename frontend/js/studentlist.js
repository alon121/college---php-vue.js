var tabs = new Vue({
        el: '#app1',
        data: {
            showingAddModal: false,
            
//            title: 'test' FOR Vue.js test
            students: [] 
        },
    created: function () {
        this.$http.get('../../backend/data/crud/students.php').then(response => {
            // success callback
            this.students = response.body;
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