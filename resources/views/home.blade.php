@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Requirements</p>
                    To keep the project basic, it only rotates around 4 basic entities i.e. users, items, services and sales.
                    Your implementation may not necessarily be limited to those.
                    <p> 1. System will have both staff and customers as system users. However, only staff members will be
                    able to access system pages. Customers on the other hand are simply recorded for the
                    completeness of the data in the system. It's probable that the customers will have access to the
                    system later in the future.
                    <p>2. There will be only 3 staff user roles i.e. Admin, Data Entrant. Data Entrant can only insert and
                    view listings or details of a particular item or sale record. An Admin can do anything except
                    deleting their own user account. It would actually be nice for an Admin not see the delete
                    button on their own profile.
                    <p>3. A service has 1 or more items attached to it. Such items may be required or optional in fulfilling
                    the service. The items attached to a service form the cost of the service. The price of the service
                    is basically cost of items + cost of labor. When recording service sale, items attached to the
                    service but marked as optional will increase the final price of the service.
                    <p>4. For each item in the inventory, the following details will need to be kept: code (string) , size
                    (string) , name (string) , cost (float) , saleable (boolean) , quantity (integer) ,
                    minimum_quantity and brand . The name can either be generated or input directly by the
                    data-entrant. When generating name of the item, use the size, code and brand - in that order.
                    For example for a tyre 17' TH4212 Pirelli , 17' is the size, TH4212 is the code and Pirelli
                    is the brand. minimum_quantity refers to the minimum stock quantity required at the shop.
                    saleable simply informs whether the items is sold directly to a customer or not. Most items
                    that are not sold directly to a customer are usually attached to a service.
                    <p>5. Whenever a sale is recorded, the quantity should always be updated. When the stock quantity
                    reaches or is below the minimum_quantity , the items should be flagged as running out of
                    stock. Show a paginated list of items that are running out of stock on the dashboard. Items that are completely out of stock i.e quantity = 0 cannot be added to a sale record.
                    <p>6. Show basic reports as follows: a. On the dashboard: Total sales revenue (current month only), A
                    count of sales (current month only), Count of Items. Count of Items Out of Stock. b. On the item
                    details page: Total sales revenue (current month only), A count of sales (current month only)
                    from the specific item being viewed. c. On the customer details page: Total sales revenue
                    (current month only), A count of sales (current month only) to the specific customer being
                    viewed. d. On the staff details page: Total sales revenue (current month only), A count of sales
                    (current month only) by the specific staff being viewed.
                    <p>7. It's assumed that the developer will take care of all the necessary CRUD operations, decide on
                    the database structure and User Interface. For the UI, feel free to use a simple library of your
                    choice. Bootstrap alone, for example, is good enough without need for Vue.js or Reactjs or
                    similar.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
