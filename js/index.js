function main() {
    link = "github.com"
    document.getElementById("title").innerHTML = "test"
    
    node = document.getElementById('test');
    node.insertAdjacentHTML("afterend", "<a id='test' href=''>test</a> ")

}

function test () {
    document.getElementById('test').href = "tests.com";
}

main();

test();