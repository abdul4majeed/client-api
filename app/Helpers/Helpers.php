<?php
function sendResponse($status_code,$error,$data){
    return response()->json(['status'=>$status_code,'error'=>$error,'data'=>$data]);
}