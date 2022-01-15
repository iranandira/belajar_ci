<?php
    class Percobaan extends CI_controller{

        function index(){
            echo"selamat datang";
        }

        function coba(){
            $this->load->view("v_siswa_percobaan");
        }

        function latihan(){
           $this->load->view("v_latihan_percobaan");
        } 

        function membuat(){
            $this->load->view("v_membuat_percobaan");
        }

        function rpl(){
            $this->load->view("v_rpl_percobaan");
        }

        function data(){
            $this->load->view("v_data_percobaan");
        }

        function admin(){
            $this->load->view("v_admin_percobaan");
        }

    }

?>