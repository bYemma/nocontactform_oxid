<?php

class NoContactFormContactController extends NoContactFormContactController_parent {

  public function render() {
    error_404_handler();
  }

  public function send() {
    return false;
  }

}