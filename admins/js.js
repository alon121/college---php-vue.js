new Vue({
  el: '#vueApp',
  data: {
    debug: true,
    users: []
  },
  methods: {
    loadUsers: function() {
//      this.$http.get('https://jsonplaceholder.typicode.com/users', function(data, status, request){
        if(status == 200)
        {
          this.users = data;
        }
      });
    }
  }
});