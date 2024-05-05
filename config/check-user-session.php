<?php

    $valid_session_duration = 60*60*24; 

    function CheckUserSession($admin_dashboard_link, $home_page_link, $agent_dashboard, $seller_dashboar){

        global $valid_session_duration;

        $user_id = $_SESSION['user-id'];
        $user_account_type = $_SESSION['user-account-type'];
        $user_session_start_time = $_SESSION['user_session_start_time']; 

        $user_session_duration = time() - $user_session_start_time;

        if(isset($user_id)){
            if($user_session_duration < $valid_session_duration){
                switch($user_account_type){
                    case 'admin':
                        header('location:'.$admin_dashboard_link."?userId=".$user_id);
                        break;
                    case 'agent':
                        header('location:'.$agent_dashboard)."?userId=".$user_id;
                        break;
                    case 'seller':
                        header('location:'.$seller_dashboar."?userId=".$user_id);
                        break;
                    default:
                        header('location:'.$home_page_link);
                    }
                }
                else{
                    header('location:'.$home_page_link);
                }
            }
            else{
                header('location:'.$home_page_link);
        }

    }