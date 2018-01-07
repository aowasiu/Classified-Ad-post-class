<?php

	class ClassifiedAdPost
	{
		//Properties defined
		private $title;
		private $description;
		private $locality = "";
		protected $contact_name;
		protected $contact_phone;
		protected $contact_email;
		protected $city;
		protected $state;
		protected $country = 'Nigeria';

		public function __construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country)
		{
			//Properties redefined
			$this->title = $title;
			$this->description = $description;
			$this->locality = $locality;
			$this->contactName = $contact_name;
			$this->contactPhone = $contact_phone;
			$this->contactEmail = $contact_email;
			$this->city = $city;
			$this->state = $state;
			$this->country = $country;
		}//End of constructor for constructor

		//This method fetches the title
		public function getTitle()
		{
			return "{$this->title}";
		}//End of getTitle method

		//This method fetches the description
		public function getDescription()
		{
			return "{$this->description}";
		}//End of getDescription method

		//This method fetches the locality
		public function getLocality()
		{
			return "{$this->locality}";
		}//End of getLocality method

		//This method fetches the contact_name
		public function getContactName()
		{
			return "{$this->contactName}";
		}//End of getContactName method

		//This method fetches the contact_phone
		public function getContactPhone()
		{
			return "{$this->contactPhone}";
		}//End of getContactPhone method

		//This method fetches the contact_email
		public function getContactEmail()
		{
			return "{$this->contactEmail}";
		}//End of getContactEmail method

		//This method fetches the city
		public function getCity()
		{
			return "{$this->city}";
		}//End of getCity method

		//This method fetches the state
		public function getState()
		{
			return "{$this->state}";
		}//End of getState method

		//This method fetches the country
		public function getCountry()
		{
			return "{$this->country}";
		}//End of getCountry method

		//This method fetches the location summary
		public function getLocationDetail()
		{
			$post_summary = '';
			$post_summary .= '<br/>' . "{$this->city}, " . "{$this->state},<br/>" . "{$this->country}<br/>";
			return $post_summary;
		}//End of getPostSummary method
		
		public function setLocality($this->city, $this->country)
		{
			$this->locality = "$this->city, $this->country";
		}//End of setLocality method

		public function getPostContactInfo()
		{
			$contact_info = 'name/Title:' . "{$this->contactName}<br/>";
			$contact_info .= 'Tel: ' . "{$this->contactPhone}<br/>";
			$contact_info .= 'Phone: ' . "{$this->contactPhone}<br/>";
			$contact_info .= 'Email: ' . "{$this->contactEmail}<br/>";
			return $contact_info;
		}//End of getPostContactInfo method
	}//End of ClassifiedAdPost class

	class PriceForClassifiedAdPost extends ClassifiedAdPost
	{
		//Properties defined
		protected $price;
		
		public function __construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country, $price)
		{
			//Properties of parent constructor redefined
			parent::__construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country);
			
			//Properties redefined
			$this->price = $price;
		}//End of constructor

		//This method gets price name
		public function getPrice()
		{
			return $this->price;
		}//End of getPrice method

	}//End of PriceForClassifiedAdPost class

	class BrandAndModelForClassifiedAdPost extends PriceForClassifiedAdPost
	{
		//Properties defined
		private $brand;
		private $model;
		
		public function __construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country, $price, $brand, $model)
		{
			//Properties of parent constructor redefined
			parent::__construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country, $price);
			
			//Properties redefined
			$this->brand = $brand;
			$this->model = $model;
		}//End of constructor

		//This method gets brand name
		public function getBrand()
		{
			return $this->brand;
		}//End of getBrand method

		//This method gets model name
		public function getModel()
		{
			return $this->model;
		}//End of getModel method

	}//End of BrandAndModelForClassifiedAdPost

	class Book extends PriceForClassifiedAdPost
	{
		//Properties redefined
		private $publisher;
		private $author;
		private $isbn;
		private $copyright_year;
		private $book_type;
		private $book_cover;
		private $book_pages;
		/***
			book_types = hardcopy || softcopy || none
			book_cover = hardcover || paperback || none
		***/

		public function __construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country, $price, $publisher, $author, $isbn, $copyright_year, $book_type, $book_cover, $book_pages)
		{
			//Properties of parent constructor redefined
			parent::__construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country, $price, $brand, $model);
			
			//Properties redefined
			$this->publisher = $publisher;
			$this->author = $author;
			$this->isbn = $isbn;
			$this->copyrightYear = $copyright_year;
			$this->bookType = $book_type;
			$this->bookCover = $book_cover;
		}//End of constructor

		public function getPublisher()
		{
			return $this->publisher;
		}//End of getPublisher method

		public function getAuthor()
		{
			return "{$this->author}";
		}//End of getAuthor method

		public function getIsbn()
		{
			return "{$this->isbn}";
		}//End of getIsbn method

		public function getCopyrightYear()
		{
			return "{$this->copyrightYear}";
		}//End of getCopyrightYear method

		public function getBookType()
		{
			return "{$this->bookType}";
		}//End of getBookType method

		public function getBookCover()
		{
			return "{$this->bookCover}";
		}//End of getBookCover method

		public function getCopyrightInfo()
		{
			return 'ISBN number: ' . "{$this->isbn}" . ' - ' . 'Copyright: ' . "{$this->copyrightYear}" . '<br/>';
		}//End of getCopyrightInfon method

		public function getBookPages()
		{
			return "{$this->bookPages}";
		}//End of getBookPages method
		
	}//End of Book class

	class Appliance extends BrandAndModelForClassifiedAdPost
	{
		//Properties redefined
		public $wattage;
		public $voltage;

		//Properties of parent constructor redefined
		public function __construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country, $price, $brand, $model, $wattage, $voltage)
		{
			//Properties of parent constructor redefined
			parent::__construct($title, $description, $locality, $contact_name, $contact_phone, $contact_email, $city, $state, $country, $price, $brand, $model);
			
			//Properties redefined
			$this->wattage = $wattage;
			$this->voltage = $voltage;
		}//End of constructor

		public function getWattage()
		{
			return "{$this->wattage}";
		}//End of getWattage method

		public function getVoltage()
		{
			return "{$this->voltage}";
		}//End of getVoltage method
		
		public function getApplianceInfo()
		{
			return "Voltage: {$this->voltage}" . '<br/>' . "Wattage: {$this->wattage}";
		}//End of getApplianceInfo method
		
	}//End of Appliance class
	
	class ClassifiedAdPostWriter
	{
		//Properties defined
		private $posts = array();

		public function addPost(ClassifiedAdPost $classifiedadpost)
		{
			$this->posts[] = $classifiedadpost;
		}

		public function write()
		{
			$stringOfPost = "";
			
			foreach($this->posts as $classifiedad_post)
			{
				$stringOfPost .= '<b>Title</b>: ' . "{$classifiedad_post->title}" . '<br/>';
				$stringOfPost .= '<b>Description</b>: ' . "{$classifiedad_post->description}" . '<br/>';
				$stringOfPost .= '<b>Neighbourhood</b>: ' . "{$classifiedad_post->locality}" . '<br/>';
				$stringOfPost .= '<b>Name</b>: ' . "{$classifiedad_post->contactName}" . '<br/>';
				$stringOfPost .= '<b>Phone</b>: ' . "{$classifiedad_post->contactPhone}" . '<br/>';
				$stringOfPost .= '<b>Email</b>: ' . "{$classifiedad_post->contactEmail}" . '<br/>';
				$stringOfPost .= '<b>Location</b>: ' . "{$classifiedad_post->getLocationDetail()}" . '<br/>';

//	$stringOfPost .= '<b></b>:' . "{$classifiedad_post->}" . '<br/>';
				
				//Switch case for each post
				switch($classifiedad_post)
				{
					case 'Appliance':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Book':
						$stringOfPost .= '<b>Publisher</b>: ' . "{$classifiedad_post->publisher}" . '<br/>';
						$stringOfPost .= '<b>Author</b>: ' . "{$classifiedad_post->author}" . '<br/>';
						$stringOfPost .= '<b>ISBN number</b>: ' . "{$classifiedad_post->getIsbn}" . '<br/>';
						$stringOfPost .= '<b>Publication year</b>: ' . "{$classifiedad_post->getCopyrightYear}" . '<br/>';
						$stringOfPost .= '<b>Book type</b>: ' . "{$classifiedad_post->getBookType()}" . '<br/>';
						$stringOfPost .= '<b>Book cover</b>: ' . "{$classifiedad_post->getBookCover()}" . '<br/>';
						$stringOfPost .= '<b>Number of pages</b>: ' . "{$classifiedad_post->getBookPages()}" . '<br/>';
						break;

					case 'Cloth':
						$stringOfPost .= '<b>Size</b>: ' . "{$classifiedad_post->getClothSize()}" . '<br/>';
						$stringOfPost .= '<b>Gender</b>: ' . "{$classifiedad_post->getClothGender()}" . '<br/>';
						$stringOfPost .= '<b>Fabric</b>: ' . "{$classifiedad_post->getClothFabric()}" . '<br/>';
						$stringOfPost .= '<b>Colour</b>: ' . "{$classifiedad_post->getClothColour()}" . '<br/>';
						break;

					case 'Computer':
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						$stringOfPost .= '<b>RAM</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Storage technology</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						$stringOfPost .= '<b>Storage size</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Operating System</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						$stringOfPost .= '<b>Computer type</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Screen size</b>: ' . "{$classifiedad_post->getScreenSize()}" . '<br/>';
						$stringOfPost .= '<b>Processor</b>: ' . "{$classifiedad_post->getProcessorName()}" . '<br/>';
						$stringOfPost .= '<b>Number of Cores</b>: ' . "{$classifiedad_post->getNumberOfCore()}" . '<br/>';
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Electronic':
						$stringOfPost .= '<b>Type</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Furniture':
						$stringOfPost .= '<b>Wood type</b>: ' . "{$classifiedad_post->getWoodType()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;


/************************************* Remaining categories  ***************************/
/**
					case 'Industry':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Invention':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Jewellry':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Jobs':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Leisure':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Office':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Pets':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Phones':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Property':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;


					case 'Relationship':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Services':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Sports':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Toys':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Travels':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Vehicles':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'General':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Bizarre':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;

					case 'Wanted':
						$stringOfPost .= '<b>Wattage</b>: ' . "{$classifiedad_post->getWattage()}" . '<br/>';
						$stringOfPost .= '<b>Voltage</b>: ' . "{$classifiedad_post->getVoltage()}" . '<br/>';
						break;
**/

					default:
						$stringOfPost .= 'You must select a category.<br/>';
				}

			}//End of foreach loop
			
			print $stringOfPost;
		}//End of write method

	}//End of ClassifiedAdPostWriter class