// const keyword = document.getElementById("keyword");
// const cari = document.getElementById("searchButton");
// const container = document.getElementById("container");

// keyword.addEventListener("keyup", function () {
//   // Create an AJAX object
//   let xhr = new XMLHttpRequest();

//   // Check the readiness state
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === 4 && xhr.status === 200) {
//       container.innerHTML = xhr.responseText;
//     } else if (xhr.readyState === 4 && xhr.status !== 200) {
//       console.error("Error: " + xhr.status);
//     }
//   };

//   // Execute AJAX

//   xhr.open(
//     "GET",
//     "http://localhost/projectman/public/script.php?file=result.php&keyword="+keyword,
//     true
//   );
//   xhr.send();
// });
// console.log("ok")

const keyword = document.getElementById("keyword");
const container = document.getElementById("container");

keyword.addEventListener("keyup", function () {
  // Create an AJAX object
  let xhr = new XMLHttpRequest();

  // Check the readiness state
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      container.innerHTML = xhr.responseText;
    } else if (xhr.readyState === 4 && xhr.status !== 200) {
      console.error("Error: " + xhr.status);
    }
  };

  // Encode the keyword value
  const encodedKeyword = encodeURIComponent(keyword.value);

  // Execute AJAX with the encoded keyword as a query parameter
  xhr.open(
    "GET",
    "http://localhost/projectman/public/coba.php?keyword=" + encodedKeyword,
    true
  );
  xhr.send();
});

