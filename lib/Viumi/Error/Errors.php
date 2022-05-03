<?php
namespace Viumi\Error;

/**
 * Viumi Exceptions
 */

/**
 * Base Viumi Exception
 */
class ViumiException extends \Exception {
    protected $message = "Base Viumi Exception";
}
/**
 * Input validation error
 */
namespace Viumi\Error;

class InputValidationError extends ViumiException {
    protected $message = "Fields validation error";
}
/**
 * Authentication error
 */
namespace Viumi\Error;

class AuthenticationError extends ViumiException {
    protected $message = "Authentication error";
}
/**
 * Resource not found
 */
namespace Viumi\Error;

class NotFound extends ViumiException {
    protected $message = "Resource not found";
}
/**
 * Method not allowed
 */
namespace Viumi\Error;

class MethodNotAllowed extends ViumiException {
    protected $message = "Method not allowed";
}
/**
 * Unhandled error
 */
namespace Viumi\Error;

class UnhandledError extends ViumiException {
    protected $message = "Unhandled error";
}
/**
 * Invalid Options
 */
namespace Viumi\Error;

class InvalidOptions extends ViumiException {
    protected $message = "Invalid Options";
}
/**
 * Invalid Token
 */
namespace Viumi\Error;

class InvalidToken extends ViumiException {
    protected $message = "Invalid token";
}
/**
 * Unable to connect to Viumi API
 */
namespace Viumi\Error;

class UnableToConnect extends ViumiException {
    protected $message = "Can not connect to Viumi API";
}
