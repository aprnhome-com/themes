<?php
// Unplanned execution path
if (!defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE')) {
    exit();
} ?>
/* ----------------------------------------------------- */

/**
 * ENUM/SET editor styles
 */

p.enum_notice {
  margin: 5px 2px;
  font-size: 80%
}

#enum_editor p {
  margin-top: 0;
  font-style: italic
}

#enum_editor .values, #enum_editor .add {
  width: 100%
}

#enum_editor .add td {
  vertical-align: middle;
  width: 50%;
  padding: 0;
  padding-left: 1em
}

#enum_editor .values td.drop {
  width: 1.8em;
  cursor: pointer;
  vertical-align: middle
}

#enum_editor .values input {
  margin: .1em 0;
  padding-right: 2em;
  width: 100%
}

#enum_editor .values img {
  width: 1.8em;
  vertical-align: middle
}

#enum_editor input.add_value {
  margin: 0;
  margin-right: 0.4em
}

#enum_editor_output textarea {
  width: 100%;
  float: right;
  margin: 1em 0 0 0
}


/**
 * ENUM/SET editor integration for the routines editor
 */

.enum_hint {
  position: relative
}

.enum_hint a {
  position: absolute;
  left: 81%;
  bottom: .35em
}
