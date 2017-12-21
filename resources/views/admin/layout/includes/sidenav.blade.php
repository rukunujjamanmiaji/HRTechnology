<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/uploads/avatars/{{ Auth::user()->image }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{route('product.index')}}">
                    <i class="glyphicon glyphicon-list"></i> <span>Products</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> <span>Product Management</span>
                    <span class="pull-right-container">

            <ul class="treeview-menu">
            <li class="active"><a href="{{route('product.create')}}"><i class="glyphicon glyphicon-plus"></i> Add Product</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Update Product</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-minus"></i> Delete Product</a></li>
          </ul>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
            </li>
            <li>
                <a href="{{route('category.index')}}">
                    <i class="glyphicon glyphicon-list"></i> <span>Categorys</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> <span>Category Management</span>
                    <span class="pull-right-container">

            <ul class="treeview-menu">
            <li class="active"><a href="{{route('category.store')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Update Category</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Delete Category</a></li>
          </ul>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> <span>Order Management</span>
                    <span class="pull-right-container">

            <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/orders/pending')}}"><i class="fa fa-circle-o"></i>Pending Orders</a></li>
            <li><a href="{{url('admin/orders/delivered')}}"><i class="fa fa-circle-o"></i>Delivered Orders</a></li>
            <li><a href="{{url('admin/orders')}}"><i class="fa fa-circle-o"></i>All Orders</a></li>
          </ul>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
            </li>


            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>