# Kenya Demographics API

Credits to <a href="https://github.com/njoguamos/kenya-demographics-units">njoguamos</a>, <a href="https://geo.mycyber.org/kenya" target="_blank">this site</a> and Wikipedia entries of Kenya's demographic units

## Important Note
The server hosting this project is not a highly efficient one, although I have cached some of the data try to cache it too.

## Getting Started

### Usage

The basic syntax of a URL request to the API is shown below:
https://api.elvisben.me.ke/demographics/{version}/{demographic-unit-name}
https://api.elvisben.me.ke/demographics/{version}/{demographic-unit-name}/{id} - *this is for more specific case

As an example to get all the counties present, the following url applies:
https://api.elvisben.me.ke/demographics/v1/counties and response will have the following structure

```json
    {
        "status_code": "200",
        "status_message_short":"Success",
        "status_message_description":"Success in fetching all counties",
        "data":[{
          **The county Data will be here **
          }]
    }
```


### Available Endpoints and their Respective Supported Methods

| Root path | `https://api.elvisben.me.ke/demographics/v1`|

### HTTP request and query methods

| Allowed Method | Endpoint | Description |
| :-- | :-- | :--
| `GET` | `/v1/constituencies` | Gets all constituencies present.|
| `GET` | `/v1/constituency/{id}` | Gets a specific constituency based on the id passed. |
| `GET` | `/v1/counties` | Gets all counties present. |
| `GET` | `/v1/county/{id}` | Gets a specific county based on id specified. |
| `GET` | `/v1/subcounties` | Gets all the subcounties present. |
| `GET` | `/v1/subcounty/{id}` | Gets a specific subcounty based on the id. |
| `GET` | `/v1/postalcodes` | Gets all the postalcodes present. |
| `GET` | `/v1/postalcode/{postalcode}` | Gets a specific postalcode based on the postalcode. |
| `GET` | `/v1/province/{id}` | Gets a specific province based on the id. |
| `GET` | `/v1/provinces` | Gets all the provinces present. |
| `GET` | `/v1/ward/{id}` | Gets a specific ward based on the id. |
| `GET` | `/v1/wards` | Gets all the wards present. |

## Future plans  
I have a few features in mind that I will roll out in the next version but if you have any suggestions about what more can be incorporated, or if you find a bug or you need any assistance, feel free to contact me directly via [email](mailto:hello@elvisben.me.ke) or [create a new issue](https://github.com/xlvisben/kenyaDemographicsAPI/issues) on the GitHub repository.


##### Get a styled and in depth view of the documentation
[Go to documentation website](https://api.elvisben.me.ke/demographics/v1/)
