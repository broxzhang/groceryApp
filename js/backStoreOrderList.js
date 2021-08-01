// function getSelectedCheckboxValues(name) {
//     const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
//     let values = [];
//     checkboxes.forEach((checkbox) => {
//         values.push(checkbox.value);
//     });
//     return values;
// }

// const btn = document.querySelector('#btn');
// btn.addEventListener('click', (event) => {
//     if (getSelectedCheckboxValues('remember')==null)
//     alert("ss");
    
// });
function check()
{
    var a=document.getElementsByName("remember");
    var j=0
        for(i=0;i<=a.length;i++)
        {
            if(a[i].checked==true)
            {
                 j=j+1;
            }
        }
       if (j==0)
       {
          alert("please select checkbox")
       }
 
}