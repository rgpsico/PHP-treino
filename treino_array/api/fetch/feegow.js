var url = 'https://api.feegow.com/v1/api/professional/list';
var token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38';

/*
var myHeaders = new Headers(); // Currently empty
myHeaders.append('x-access-token:', token);

let h = new Headers({
'Host': 'api.feegow.com/v1',
'x-access-token':token,
'Content-type':'application/json'
})
*/
fetch(url,{
    method: 'GET',    
    mode: 'no-cors'
})
.then(function(response) {
    console.log(response);
}).catch(function (response) {
    console.log(response);
});