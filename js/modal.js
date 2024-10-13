//modal
const modalBtns = document.querySelectorAll(".modal-toggle");
modalBtns.forEach(function (btn) {
btn.onclick = function () {
var modal = btn.getAttribute('data-modal');
document.getElementById(modal).style.display = "flex";
};
});
const closeBtns = document.querySelectorAll(".modal-close");
  closeBtns.forEach(function (btn) {
  btn.onclick = function () {
  var modal = btn.closest('.modal-sp');
  modal.style.display = "none";
};
});

window.onclick = function (event) {
if (event.target.className === "modal-sp") {
event.target.style.display = "none";
}
};



//toc
document.addEventListener('DOMContentLoaded', function() {
htmlTableOfContents();
} );                        

function htmlTableOfContents( documentRef ) {
var documentRef = documentRef || document;
var toc = documentRef.getElementById("tocBlock");
var headings = [].slice.call(documentRef.body.querySelectorAll('.site-main h2, .site-main h3')); /* ここで目次で取得するタグを指定 */
headings.forEach(function (heading, index) {
var ref = "toc" + index;
if ( heading.hasAttribute( "id" ) ) 
  ref = heading.getAttribute( "id" );
else
  heading.setAttribute( "id", ref );

var link = documentRef.createElement( "a" );
link.setAttribute( "href", "#"+ ref );
link.classList.add('linkTarget');
link.textContent = heading.textContent;
link.setAttribute( "onclick", "displayno()" );

var div = documentRef.createElement( "li" );
div.setAttribute( "class", heading.tagName.toLowerCase() );
div.appendChild( link );
toc.appendChild( div );
});
}

try {
module.exports = htmlTableOfContents;
} catch (e) {
};

//event
function displayno() {
document.getElementById("modalOne").style.display = "none";
};

//modalアイコンのフェードイン
jQuery(function() {
var modaltop = $('.modal-toggle');
modaltop.hide();
$(window).scroll(function () {
if ($(this).scrollTop() > 500) {
  modaltop.fadeIn();
} else {
  modaltop.fadeOut();
}
});
});