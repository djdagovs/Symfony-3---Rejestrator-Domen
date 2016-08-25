<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // your_examplebundle_crontasks_test
        if ($pathinfo === '/crontasks/test') {
            return array (  '_controller' => 'AppBundle\\Controller\\CronTaskController::testAction',  '_route' => 'your_examplebundle_crontasks_test',);
        }

        // strona główna
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'strona główna');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'strona główna',);
        }

        if (0 === strpos($pathinfo, '/do')) {
            if (0 === strpos($pathinfo, '/domeny')) {
                // Lista Domen
                if ($pathinfo === '/domeny') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DomenyController::listaDomenAction',  '_route' => 'Lista Domen',);
                }

                // Info Domeny
                if (0 === strpos($pathinfo, '/domeny/info') && preg_match('#^/domeny/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Info Domeny')), array (  '_controller' => 'AppBundle\\Controller\\DomenyController::InfoDomenAction',));
                }

                // Lista_Domen_Komunikat
                if (preg_match('#^/domeny/(?P<komunikat>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Lista_Domen_Komunikat')), array (  '_controller' => 'AppBundle\\Controller\\DomenyController::listaDomenDodanoAction',));
                }

            }

            // Dodaj Domene
            if ($pathinfo === '/dodaj/domene') {
                return array (  '_controller' => 'AppBundle\\Controller\\DomenyController::dodajDomeneAction',  '_route' => 'Dodaj Domene',);
            }

            // Edytuj Domene
            if (0 === strpos($pathinfo, '/domeny/edit') && preg_match('#^/domeny/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Edytuj Domene')), array (  '_controller' => 'AppBundle\\Controller\\DomenyController::edytujDomeneAction',));
            }

        }

        // Pogrupoowane Domeny
        if ($pathinfo === '/widoki/pogrupowane-domeny') {
            return array (  '_controller' => 'AppBundle\\Controller\\DomenyController::pogrupowaneDomenyAction',  '_route' => 'Pogrupoowane Domeny',);
        }

        // Usuń Domene
        if (0 === strpos($pathinfo, '/domeny/delete') && preg_match('#^/domeny/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Usuń Domene')), array (  '_controller' => 'AppBundle\\Controller\\DomenyController::usunDomeneAction',));
        }

        // Lista Firm
        if ($pathinfo === '/firmy') {
            return array (  '_controller' => 'AppBundle\\Controller\\FirmyController::listaFirmaAction',  '_route' => 'Lista Firm',);
        }

        // Dodaj Firme
        if ($pathinfo === '/dodaj/firme') {
            return array (  '_controller' => 'AppBundle\\Controller\\FirmyController::dodajFirmeAction',  '_route' => 'Dodaj Firme',);
        }

        if (0 === strpos($pathinfo, '/firm')) {
            // Edytuj Firme
            if (0 === strpos($pathinfo, '/firma/edit') && preg_match('#^/firma/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Edytuj Firme')), array (  '_controller' => 'AppBundle\\Controller\\FirmyController::edytujFirmeAction',));
            }

            // Lista_Firma_Komunikat
            if (0 === strpos($pathinfo, '/firmy') && preg_match('#^/firmy/(?P<komunikat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Lista_Firma_Komunikat')), array (  '_controller' => 'AppBundle\\Controller\\FirmyController::listaFirmDodanoAction',));
            }

            if (0 === strpos($pathinfo, '/firma')) {
                // Info Firma
                if (0 === strpos($pathinfo, '/firma/info') && preg_match('#^/firma/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Info Firma')), array (  '_controller' => 'AppBundle\\Controller\\FirmyController::InfoFirmaAction',));
                }

                // Usuń Firme
                if (0 === strpos($pathinfo, '/firma/delete') && preg_match('#^/firma/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Usuń Firme')), array (  '_controller' => 'AppBundle\\Controller\\FirmyController::usunFirmeAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/serwery')) {
            // Lista Serwerow
            if ($pathinfo === '/serwery') {
                return array (  '_controller' => 'AppBundle\\Controller\\SerweryController::listaSerwerowAction',  '_route' => 'Lista Serwerow',);
            }

            // Lista_Serwer_Komunikat
            if (preg_match('#^/serwery/(?P<komunikat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Lista_Serwer_Komunikat')), array (  '_controller' => 'AppBundle\\Controller\\SerweryController::listaDomenDodanoAction',));
            }

        }

        // Dodaj Serwer
        if ($pathinfo === '/dodaj/serwer') {
            return array (  '_controller' => 'AppBundle\\Controller\\SerweryController::dodajSerwerAction',  '_route' => 'Dodaj Serwer',);
        }

        if (0 === strpos($pathinfo, '/serwer')) {
            // Edytuj Serwer
            if (0 === strpos($pathinfo, '/serwer/edit') && preg_match('#^/serwer/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Edytuj Serwer')), array (  '_controller' => 'AppBundle\\Controller\\SerweryController::edytujSerwerAction',));
            }

            // Info Serwer
            if (0 === strpos($pathinfo, '/serwer/info') && preg_match('#^/serwer/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Info Serwer')), array (  '_controller' => 'AppBundle\\Controller\\SerweryController::InfoSerwerAction',));
            }

            if (0 === strpos($pathinfo, '/serwer/d')) {
                // Direct_Admin_simple
                if (0 === strpos($pathinfo, '/serwer/direct-admin') && preg_match('#^/serwer/direct\\-admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Direct_Admin_simple')), array (  '_controller' => 'AppBundle\\Controller\\SerweryController::directAdminAction',));
                }

                // Usuń Serwer
                if (0 === strpos($pathinfo, '/serwer/delete') && preg_match('#^/serwer/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Usuń Serwer')), array (  '_controller' => 'AppBundle\\Controller\\SerweryController::usunSerwerAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
