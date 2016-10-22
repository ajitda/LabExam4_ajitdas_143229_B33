<script type="text/javascript">
      for(i=2;i<=100;i++){
     if(primeNumber(i)){
     document.write(i + " ");
     }
     }

    function primeNumber(num){
        for(j=2; j<=(num/2);j++){
            if(num % j==0){
                return false;
            }
        }
        return true;
    }

</script>