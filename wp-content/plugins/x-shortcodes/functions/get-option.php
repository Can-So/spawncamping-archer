<?php

// =============================================================================
// FUNCTIONS/GET-OPTION.PHP
// -----------------------------------------------------------------------------
// Retrieves a value from the database.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Get Option
// =============================================================================

// Get Option
// =============================================================================

if ( ! function_exists( 'x_get_option' ) ) :
  function x_get_option( $option, $default = false ) {

    $output = get_option( $option, $default );

    return apply_filters( 'x_option_' . $option, $output );

  }
endif;