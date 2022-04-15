function check_input() {
	if(!document.member_form.id.value){
		alert("아이디를 입력하세요");
		document.member_form.id.focus();
		return;
	}

	if(!document.member_form.pass.value){
		alert("비밀번호를 입력하세요");
		document.member_form.pass.focus();
		return;
	}

	if(!document.member_form.pass_confirm.value){
		alert("비밀번호 확인을 입력하세요");
		document.member_form.pass_confirm.focus();
		return;
	}

	if(!document.member_form.name.value){
		alert("이름을 입력하세요");
		document.member_form.name.focus();
		return;
	}

	document.member_form.submit();
}

function check_id(){
	window.open("member_check_id.php?id=" + document.member_form.id.value, "IDcheck", 
		"left=700, top=300, width=350, height=200, scrollbars=no, resizable=yes");
}