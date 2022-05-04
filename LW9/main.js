
function isPrimeNumber(arr) {
    if (typeof arr === "number" ){
        arr = [arr]
    }
    if(typeof arr !== "object"){
        console.log("unexpected type");
        return;
    }
    let flag=true;
    arr.forEach(function(item){
        if(item !== 1){
        for(let x=2; x < item; x++){
            if(item % x === 0){
                console.log(item+" is not prime number");
                flag = false;
                break;
            }

        }
        if (flag) {
            console.log(item+" is prime number");
        }}else {console.log("it's 1")}
    });
}

function calc(str) {
    const regex = /\(.+\)/; // регулярное выражение

    if(str.indexOf(regex) === -1) {
        calc(str.indexOf(regex));
    }
    let res;
    if(str.indexOf(regex) !== -1) {
        let op;
        for(let i=0; i<str.length-1; i++){
            if(str[i] === '+' || '-' || '*' || '/'){
                op = str[i];
                break;
        }}
        function numFromStr(str){
            return [...str]
                .map(i => {if(isFinite(i) === true || i === "."){return i}else{return " "}})
                .join("")
                .split(" ")
                .filter(i => i !== "")
                .map(i => Number(i))
        }
        let nums = numFromStr(str)
        if(op === '+'){
           res = nums[1] + nums[2];
        }
        if(op === '-'){
            res = nums[1] - nums[2];
        }
        if(op === '/'){
            res = nums[1] / nums[2];
        }
        if(op === '*'){
            res = nums[1] * nums[2];
        }

        return res;
    }


}