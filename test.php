<DOCTYPE html>
<html>
<head>
  <title>Vue Demo #1: The Box App</title>
  <meta charset='utf-8' />
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
  <h1>Vue Demo #1</h1>
  <div id="vapp">
  <p>Hello World: {{ display }}</p>
  </div>
<!-- Our View App goes at the end of the document -->
<script>
const vueApp = new Vue({
  el: '#vapp',
  data: { 
   display: 'redbox' 
  }
})
</script>
</body>
</html>