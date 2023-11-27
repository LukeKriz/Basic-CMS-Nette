<?php
// source: C:\wamp64\www\CMS/config/common.neon
// source: C:\wamp64\www\CMS/config/services.neon
// source: C:\wamp64\www\CMS/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_79d86c3057 extends Nette\DI\Container
{
	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'database.default.context' => 'database.default.explorer',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.authorizator' => 'security.authorizator',
		'nette.cacheJournal' => 'cache.journal',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.explorer',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.explorer']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Security\Authorizator' => [['security.authorizator']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'app\Model\DatabaseManager' => [['01', '02', '06', '07', '08']],
		'app\Model\ArticleManager' => [['01']],
		'app\Model\CategoryManager' => [['02']],
		'app\Forms\FormFactory' => [['03']],
		'app\Forms\SignInFormFactory' => [['04']],
		'app\Forms\SignUpFormFactory' => [['05']],
		'app\Model\CommentManager' => [['06']],
		'app\Model\CmsManager' => [['07']],
		'app\Model\ContactManager' => [['08']],
		'app\FrontModule\Presenters\BaseFrontPresenter' => [
			2 => ['09', 'application.9', 'application.10', 'application.11'],
		],
		'Nittro\Bridges\NittroUI\Presenter' => [2 => ['09', 'application.9', 'application.10', 'application.11']],
		'Nette\Application\UI\Presenter' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\Application\UI\Control' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\Application\UI\Component' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\ComponentModel\Container' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\ComponentModel\Component' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\Application\IPresenter' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
				'application.13',
				'application.14',
				'application.15',
			],
		],
		'Nette\Application\UI\Renderable' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'ArrayAccess' => [
			2 => [
				'09',
				'router',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\Application\UI\SignalReceiver' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\ComponentModel\IContainer' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'Nette\ComponentModel\IComponent' => [
			2 => [
				'09',
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
				'application.9',
				'application.10',
				'application.11',
				'application.12',
			],
		],
		'app\FrontModule\Presenters\ContactPresenter' => [2 => ['09']],
		'Nette\Routing\RouteList' => [['router']],
		'Nette\Routing\Router' => [['router']],
		'Countable' => [2 => ['router']],
		'IteratorAggregate' => [2 => ['router']],
		'Traversable' => [2 => ['router']],
		'Nette\Application\Routers\RouteList' => [['router']],
		'Nette\Security\IAuthenticator' => [['authenticator']],
		'app\Model\UserManager' => [['authenticator']],
		'app\AdminModule\Presenters\BaseAdminPresenter' => [
			2 => [
				'application.1',
				'application.2',
				'application.3',
				'application.4',
				'application.5',
				'application.6',
				'application.7',
				'application.8',
			],
		],
		'app\AdminModule\Presenters\ArticlePresenter' => [2 => ['application.1']],
		'app\AdminModule\Presenters\CategoryPresenter' => [2 => ['application.2']],
		'app\AdminModule\Presenters\CmsPresenter' => [2 => ['application.3']],
		'app\AdminModule\Presenters\CommentPresenter' => [2 => ['application.4']],
		'app\AdminModule\Presenters\DashboardPresenter' => [2 => ['application.5']],
		'app\AdminModule\Presenters\SettingPresenter' => [2 => ['application.6']],
		'app\AdminModule\Presenters\SignPresenter' => [2 => ['application.7']],
		'app\AdminModule\Presenters\UserPresenter' => [2 => ['application.8']],
		'app\FrontModule\Presenters\ArticlePresenter' => [2 => ['application.9']],
		'app\FrontModule\Presenters\CmsPresenter' => [2 => ['application.10']],
		'app\FrontModule\Presenters\HomepagePresenter' => [2 => ['application.11']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.12']],
		'App\Presenters\ErrorPresenter' => [2 => ['application.13']],
		'NetteModule\ErrorPresenter' => [2 => ['application.14']],
		'NetteModule\MicroPresenter' => [2 => ['application.15']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): app\Model\ArticleManager
	{
		return new app\Model\ArticleManager($this->getService('database.default.explorer'), 'C:\wamp64\www\CMS\www/images/articles');
	}


	public function createService02(): app\Model\CategoryManager
	{
		return new app\Model\CategoryManager($this->getService('database.default.explorer'));
	}


	public function createService03(): app\Forms\FormFactory
	{
		return new app\Forms\FormFactory;
	}


	public function createService04(): app\Forms\SignInFormFactory
	{
		return new app\Forms\SignInFormFactory($this->getService('03'), $this->getService('security.user'));
	}


	public function createService05(): app\Forms\SignUpFormFactory
	{
		return new app\Forms\SignUpFormFactory($this->getService('03'), $this->getService('authenticator'));
	}


	public function createService06(): app\Model\CommentManager
	{
		return new app\Model\CommentManager($this->getService('database.default.explorer'));
	}


	public function createService07(): app\Model\CmsManager
	{
		return new app\Model\CmsManager($this->getService('database.default.explorer'), 'C:\wamp64\www\CMS\www/images/cms');
	}


	public function createService08(): app\Model\ContactManager
	{
		return new app\Model\ContactManager($this->getService('database.default.explorer'));
	}


	public function createService09(): app\FrontModule\Presenters\ContactPresenter
	{
		$service = new app\FrontModule\Presenters\ContactPresenter(
			'mail@lukekriz.cz',
			$this->getService('mail.mailer'),
			$this->getService('08'),
		);
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectManagerDependencies($this->getService('02'), $this->getService('07'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__1(): app\AdminModule\Presenters\ArticlePresenter
	{
		$service = new app\AdminModule\Presenters\ArticlePresenter($this->getService('01'), $this->getService('02'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectFormFactory($this->getService('03'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__10(): app\FrontModule\Presenters\CmsPresenter
	{
		$service = new app\FrontModule\Presenters\CmsPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectManagerDependencies($this->getService('02'), $this->getService('07'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__11(): app\FrontModule\Presenters\HomepagePresenter
	{
		$service = new app\FrontModule\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectManagerDependencies($this->getService('02'), $this->getService('07'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__12(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__13(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__14(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__15(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('router'));
	}


	public function createServiceApplication__2(): app\AdminModule\Presenters\CategoryPresenter
	{
		$service = new app\AdminModule\Presenters\CategoryPresenter($this->getService('02'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectFormFactory($this->getService('03'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): app\AdminModule\Presenters\CmsPresenter
	{
		$service = new app\AdminModule\Presenters\CmsPresenter($this->getService('07'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectFormFactory($this->getService('03'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): app\AdminModule\Presenters\CommentPresenter
	{
		$service = new app\AdminModule\Presenters\CommentPresenter($this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectFormFactory($this->getService('03'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): app\AdminModule\Presenters\DashboardPresenter
	{
		$service = new app\AdminModule\Presenters\DashboardPresenter($this->getService('01'), $this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectFormFactory($this->getService('03'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__6(): app\AdminModule\Presenters\SettingPresenter
	{
		$service = new app\AdminModule\Presenters\SettingPresenter($this->getService('08'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectFormFactory($this->getService('03'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__7(): app\AdminModule\Presenters\SignPresenter
	{
		$service = new app\AdminModule\Presenters\SignPresenter($this->getService('04'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectFormFactory($this->getService('03'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__8(): app\AdminModule\Presenters\UserPresenter
	{
		$service = new app\AdminModule\Presenters\UserPresenter($this->getService('authenticator'), $this->getService('05'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectFormFactory($this->getService('03'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__9(): app\FrontModule\Presenters\ArticlePresenter
	{
		$service = new app\FrontModule\Presenters\ArticlePresenter($this->getService('01'), $this->getService('06'));
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->injectManagerDependencies($this->getService('02'), $this->getService('07'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
		);
		$service->catchExceptions = null;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service,
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory'),
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory'),
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'C:\wamp64\www\CMS/temp/cache/nette.application/touch',
		));
		$service->setMapping(['*' => 'app\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceAuthenticator(): app\Model\UserManager
	{
		return new App\Model\UserManager($this->getService('database.default.explorer'), $this->getService('security.passwords'));
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('C:\wamp64\www\CMS/temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('C:\wamp64\www\CMS/temp/cache', $this->getService('cache.journal'));
	}


	public function createServiceContainer(): Container_79d86c3057
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=CMS', 'root', 'root', []);
		Nette\Bridges\DatabaseTracy\ConnectionPanel::initialize(
			$service,
			true,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen'),
		);
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__explorer(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage'),
		);
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_79d86c3057 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('C:\wamp64\www\CMS/temp/cache/latte');
				$service->setAutoRefresh(true);
				$service->setStrictTypes(true);
				$service->setStrictParsing(false);
				$service->enablePhpLinter(null);
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null,
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'), false);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceRouter(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createServiceSecurity__authorizator(): Nette\Security\Authorizator
	{
		$service = new Nette\Security\Permission;
		$service->addRole('guest', null);
		$service->addRole('member', ['guest']);
		$service->addRole('admin', null);
		$service->addResource('Error');
		$service->addResource('Admin:Dashboard');
		$service->addResource('Admin:Sign');
		$service->addResource('Admin:Category');
		$service->addResource('Admin:Article');
		$service->addResource('Admin:User');
		$service->addResource('Admin:Comment');
		$service->addResource('Admin:Cms');
		$service->addResource('Admin:Setting');
		$service->allow('admin');
		$service->allow('guest', 'Error');
		$service->allow('guest', 'Admin:Sign');
		$service->allow('member', 'Admin:Dashboard', 'default');
		$service->allow('member', 'Admin:Sign', 'out');
		$service->allow('member', 'Admin:Comment');
		$service->allow('member', 'Admin:Article');
		return $service;
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			$this->getService('authenticator'),
			$this->getService('security.authorizator'),
			$this->getService('security.userStorage'),
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize(): void
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			$logger = $this->getService('tracy.logger');
			if ($logger instanceof Tracy\Logger) $logger->mailer = [
				new Tracy\Bridges\Nette\MailSender(
					$this->getService('mail.mailer'),
					null,
					$this->getByType('Nette\Http\Request', false)?->getUrl()->getHost(),
				),
				'send',
			];
		})();
	}
}
