<?php 
  header("Content-type: text/css");
?>
* {
  margin: 0px;
  padding: 0px;
  list-style: none; }

img {
  max-width: 100%; }

a {
  text-decoration: none;
  outline: none;
  color: #444; }

a:hover {
  color: #444; }

ul {
  margin-bottom: 0;
  padding-left: 0; }

a:hover,
a:focus,
input,
textarea {
  text-decoration: none;
  outline: none; }

.center {
  text-align: center; }

.left {
  text-align: left; }

.right {
  text-align: right; }

.cp {
  cursor: pointer; }

html, body {
  height: 100%; }

p {
  margin-bottom: 0px;
  width: 100%; }

.no-padding {
  padding: 0px; }

.no-margin {
  margin: 0px; }

.hid {
  display: none; }

.top-mar {
  margin-top: 15px; }

.h-100 {
  height: 100%; }

::placeholder {
  color: #747f8a !important;
  font-size: 13px;
  opacity: .5 !important; }

.container-fluid {
  padding: 0px; }

h1, h2, h3, h4, h5, h6 {
  font-family: "mouse-500", Arial, Helvetica, sans-serif; }

strong {
  font-family: "mouse-500", Arial, Helvetica, sans-serif; }

body {
  background-color: #f7f7ff !important;
  font-family: "mouse-300", Arial, Helvetica, sans-serif;
  color: #6A6A6A; }

.session-title {
  padding: 30px;
  margin: 0px; }
  .session-title h2 {
    width: 100%;
    text-align: center; }
  .session-title p {
    max-width: 850px;
    text-align: center;
    float: none;
    margin: auto; }
  .session-title span {
    float: right;
    font-style: italic; }

.inner-title {
  padding: 20px;
  padding-left: 0px;
  margin-bottom: 30px; }
  .inner-title h2 {
    width: 100%;
    text-align: center;
    font-size: 2rem;
    font-family: "slab", Arial, Helvetica, sans-serif; }
  .inner-title p {
    width: 100%;
    text-align: center; }

.page-nav {
  padding: 40px;
  text-align: center;
  padding-top: 160px; }
  .page-nav ul {
    float: none;
    margin: auto; }
  .page-nav h2 {
    font-size: 36px;
    width: 100%;
    color: #444; }
    @media screen and (max-width: 600px) {
      .page-nav h2 {
        font-size: 26px; } }
  .page-nav ul li {
    float: left;
    margin-right: 10px;
    margin-top: 10px;
    font-size: 16px; }
    .page-nav ul li i {
      width: 30px;
      text-align: center;
      color: #444; }
    .page-nav ul li a {
      color: #444; }

.btn-success {
  background-color: #00ab9f;
  border-color: #00ab9f; }
  .btn-success:hover {
    background-color: #00ab9f !important;
    border-color: #00ab9f !important; }
  .btn-success:active {
    background-color: #00ab9f !important;
    border-color: #00ab9f !important; }
  .btn-success:focus {
    background-color: #00ab9f !important;
    border-color: #00ab9f !important;
    box-shadow: none !important; }

.btn-info {
  background-color: #00a8df;
  border-color: #00a8df; }
  .btn-info:hover {
    background-color: #00a8df !important;
    border-color: #00a8df !important; }
  .btn-info:active {
    background-color: #00a8df !important;
    border-color: #00a8df !important; }
  .btn-info:focus {
    background-color: #00a8df !important;
    border-color: #00a8df !important;
    box-shadow: none !important; }

.btn {
  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
  border-radius: 2px; }

.form-control:focus {
  box-shadow: none !important;
  border: 2px solid  #00a8df; }

.btn-light {
  background-color: #FFF;
  color: #3F3F3F; }

@media screen and (max-width: 1199px) {
  .container {
    max-width: 100%; } }
.collapse.show {
  display: block !important; }

.form-control:focus {
  box-shadow: none;
  border: 2px solid #0d7a40 !important; }

.form-control {
  background-color: #F8F8F8;
  margin-bottom: 20px; }
  .form-control:focus {
    background-color: #FFF;
    border-color: #CCC; }

/* ===================================== Header CSS ================================== */
header {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  position: relative;
  width: 100%;
  z-index: 999; }
  header .header-nav {
    background-color: #FFF;
    width: 100%; }
    header .header-nav .nav-item ul li {
      float: left;
      font-family: "mouse-500", Arial, Helvetica, sans-serif;
      font-size: 16px;
      padding: 28px; }
      @media screen and (max-width: 998px) {
        header .header-nav .nav-item ul li {
          padding: 30px 18px; } }
      @media screen and (max-width: 767px) {
        header .header-nav .nav-item ul li {
          float: none;
          padding: 14px;
          border-top: 1px solid #CCC; } }
    header .header-nav .d-none img {
      width: 200px;
      padding: 0px;
      margin-top: 21px; }
      @media screen and (max-width: 767px) {
        header .header-nav .nav-img img {
          margin-top: 0px;
          padding: 10px; } }
    header .header-nav .appoint {
      padding-top: 21px; }
  header .scroll-to-fixed-fixed {
    background-color: #FFF;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }

.small-menu {
  float: right;
  color: #1ac2f9;
  font-size: 32px;
  margin-top: 17px;
  margin-right: 12px; }
  @media screen and (max-width: 767px) {
    .small-menu {
      margin-top: 11px; } }

/* ===================================== Slider CSS ================================== */
.slider {
  width: 100%;
  overflow: hidden;
  height: 575px; }
  @media screen and (max-width: 922px) {
    .slider {
      height: 400px; } }
  .slider li {
    width: 100%;
    overflow: hidden;
    height: 575px;
    background-size: 100%;
    ackground-position: 50% 50%;
    background-repeat: no-repeat;
    background-position: right top;
    position: absolute;
    transition: visibility 0s, opacity 0.5s linear; }
    .slider li .slider-layer {
      background: rgba(197, 64, 102, 0.4);
      background: -webkit-linear-gradient(top, rgba(0, 147, 173, 0.9), rgba(0, 171, 159, 0.4));
      background: -moz-linear-gradient(top, rgba(0, 147, 173, 0.9), rgba(0, 171, 159, 0.4));
      background: -o-linear-gradient(top, rgba(0, 147, 173, 0.9), rgba(0, 171, 159, 0.4));
      background: -ms-linear-gradient(top, rgba(0, 147, 173, 0.9), rgba(0, 171, 159, 0.4));
      background: linear-gradient(top, rgba(0, 147, 173, 0.9), rgba(0, 171, 159, 0.4));
      width: 100%;
      height: 575px;
      position: absolute;
      left: 0;
      top: 0;
      color: #FFFFFF;
      padding-top: 80px; }
      @media screen and (max-width: 922px) {
        .slider li .slider-layer {
          padding-top: 30px; } }
      .slider li .slider-layer h1 {
        font-size: 64px;
        text-align: center;
        margin-top: 30px;
        font-family: 'alegreya_bold_italic', serif;
        transition: width 2s, height 4s; }
      .slider li .slider-layer p {
        text-align: center;
        font-size: 26px;
        font-family: 'alegreya_bold_italic', serif; }
      .slider li .slider-layer span {
        float: right; }
      .slider li .slider-layer .buttn-row {
        margin-top: 60px;
        text-align: center; }
        .slider li .slider-layer .buttn-row .btn {
          padding: 10px 20px;
          background-color: #FFF;
          color: #444444;
          box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
          border-radius: 2px;
          font-weight: 600;
          margin-left: 20px; }
  @media screen and (max-width: 1199px) {
    .slider li {
      height: 600px; }
      .slider li .slider-layer {
        height: 600px; } }
  @media screen and (max-width: 1105px) {
    .slider li {
      height: 500px; }
      .slider li h1 {
        font-size: 44px !important; }
      .slider li p {
        font-size: 22px !important; }
    .slider .slider-layer {
      padding-top: 30px !important;
      height: 500px; } }
  @media screen and (max-width: 922px) {
    .slider li {
      background-position: center;
      background-size: cover;
      height: 400px; } }
  @media screen and (max-width: 580px) {
    .slider li h1 {
      font-size: 34px !important; }
    .slider li p {
      font-size: 20px !important; }
    .slider li .buttn-row {
      margin-top: 20px; }
      .slider li .buttn-row .btn {
        padding: 5px 10px !important;
        font-size: 14px !important; } }
  @media screen and (max-width: 400px) {
    .slider li h1 {
      font-size: 24px !important; }
    .slider li p {
      font-size: 18px !important; } }

