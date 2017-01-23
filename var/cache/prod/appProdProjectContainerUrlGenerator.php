<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\AboutController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'challenge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/challenge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_challenge' => array (  0 =>   array (    0 => 'challengeId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'challengeId',    ),    1 =>     array (      0 => 'text',      1 => '/challenge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_challenges' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::showReducedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/challenges',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_challenge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new/challenge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_challenge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit/challenge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_challenge' => array (  0 =>   array (    0 => 'challengeId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ChallengeController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'challengeId',    ),    1 =>     array (      0 => 'text',      1 => '/remove/challenge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'community' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\CommunityController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/community',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'league' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/league',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_league' => array (  0 =>   array (    0 => 'leagueId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'leagueId',    ),    1 =>     array (      0 => 'text',      1 => '/league',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_leagues' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::showReducedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/leagues',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_league' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new/league',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_league' => array (  0 =>   array (    0 => 'leagueId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'leagueId',    ),    1 =>     array (      0 => 'text',      1 => '/edit/league',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_league' => array (  0 =>   array (    0 => 'leagueId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\LeagueController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'leagueId',    ),    1 =>     array (      0 => 'text',      1 => '/remove/league',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\NewsController::showReducedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_news' => array (  0 =>   array (    0 => 'newsId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\NewsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'newsId',    ),    1 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::showReducedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_profile' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::showProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_friends' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::showFriendzoneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/friendzone',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/edit/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'DevLeaguesBundle\\Controller\\UserController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/remove/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/append-form-field-element',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/core/get-short-object-description',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/set-object-field-value',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sonata_admin_retrieve_autocomplete_items' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-autocomplete-items',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo-admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_profile' => array (  0 =>   array (    0 => 'userid',  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userid',    ),    2 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_all_tasks' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tasks/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_show_task' => array (  0 =>   array (    0 => 'taskid',  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'taskid',    ),    2 =>     array (      0 => 'text',      1 => '/tasks',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_all_notifications' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/notifications/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_show_notification' => array (  0 =>   array (    0 => 'notifyid',  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifyid',    ),    2 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_all_messages' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_show_message' => array (  0 =>   array (    0 => 'messageid',  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'messageid',    ),    2 =>     array (      0 => 'text',      1 => '/messages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo-admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_form_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo-admin/form-demo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_login_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo-admin/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_dash_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo-admin/dashboard/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_ui_gen_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::uiGeneralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo-admin/ui-elements/general/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'avanzu_admin_ui_icon_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::uiIconsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo-admin/ui-elements/icons/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
