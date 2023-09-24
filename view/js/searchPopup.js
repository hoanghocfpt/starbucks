const search = document.querySelector('#search');
const searchPopup = document.querySelector('.search_popup');
search.addEventListener('click', () => {
    
    searchPopup.classList.toggle('active');

    document.querySelector('body').style.overflow = 'hidden';
    document.querySelector('#inputSearch').focus();
});


document.querySelector('.search_popup').addEventListener('click', (e) => {
    // console.log(e.target);
    if (e.target.classList.contains('search_popup')) {
        searchPopup.classList.remove('active');
        
        document.querySelector('body').style.overflowY = 'auto';
    }
});

document.querySelector('#inputSearch').addEventListener('keyup', function() {
    var input = this.value;
    if(input.length > 0){
        // Tạo một đối tượng XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Thiết lập phương thức và URL của request
        xhr.open("GET", "model/ajax/searchProduct.php?name="+input, true);

        // Xử lý sự kiện khi request hoàn thành
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Parse JSON response
                var data = JSON.parse(xhr.responseText);

                var kq = "";
                for (let i = 0; i < data.length; i++) {
                    const element = data[i];
                    kq += `<div>Tên sản phẩm: ${element.name}</div>
                    <div>Giá: ${element.price}</div>`;
                    
                }
                document.querySelector(".search_result").innerHTML = kq;
            }
        };

        // Gửi request
        xhr.send();
        }else{
            document.querySelector(".search_result").innerHTML = "";
        }
});
