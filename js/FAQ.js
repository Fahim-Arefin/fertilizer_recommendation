let h2 = document.querySelectorAll('#FAQ div h2')
// console.log(h2)
for (let question of h2) {
    question.addEventListener('click', () => {
        // console.log(question.nextElementSibling)
        let p = question.nextElementSibling
        if(p.getAttribute('class')!=='activeAns'){
            p.classList.add('activeAns')
        }else{
            p.classList.remove('activeAns')
        }
    })
}